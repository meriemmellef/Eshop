<?php

namespace BackendBundle\Controller\GestionnairePays;


use BackendBundle\Form\StationType;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use WebBundle\Entity\Station;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/station")
 */
class StationController extends Controller
{
    /**
     *
     * @Route("/", name="station_index")
     * @Method("GET")
     */
    public function index(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $search=$request->get('search',"");
        $page= $request->query->getInt('page', 1);

        $stations =$em->getRepository('WebBundle:Station')->getStationByPays($this->getUser()->getPays(),$search);
       /*

        $paginator = $this->get('knp_paginator');
        $stations_paginator = $paginator->paginate(
            $stations, $page, 10
        //Produits::NUM_ITEMS
        );
        $stations_paginator->setUsedRoute('station_index_paginated');
        */

        $paginator = $this->get('knp_paginator');

        $stations_paginator = $paginator->paginate(
            $stations, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10/*limit per page*/
        );
        return $this->render('@Backend/gestionnaire/station/index.html.twig', [
            'stations' => $stations_paginator,
            'search' => $search,
            'nbstations' => $stations,
            'page' => $page,

        ]);
    }

    /**
     * @Route("/new", name="station_new", methods={"GET","POST"})
     */
    public function newAction(Request $request)
    {
        $station = new Station();
        $form = $this->createForm(StationType::class, $station,array("pays"=>$this->getUser()->getPays()));
       //was $form = $this->createForm(StationType::class, $station,array("pays"=>$this->getUser()->getPays()->getCode()));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form['file_vente']->getData();

            if ($file) {
                $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.'pdf';
                // Move the file to the directory where brochures are stored
                try {
                    $file->move(
                        $this->getParameter('condition_vente_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $station->setFileVente($newFilename);

            }
            $entityManager = $this->getDoctrine()->getManager();
            $station->setPays($this->getUser()->getPays());
            $entityManager->persist($station);
            $entityManager->flush();
            $referer =$request->request->get('referer');
            if($referer == "") return $this->redirectToRoute('station_index');
            return $this->redirect($request->request->get('referer'));
          //  return $this->redirectToRoute('station_index');
        }

        return $this->render('@Backend/gestionnaire/station/new.html.twig', [
            'station' => $station,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}/{page}/edit", name="station_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Station $station,$page)
    {
        if($station->getPays() == $this->getUser()->getPays()) {
            $form = $this->createForm(StationType::class, $station, ["pays"=>$this->getUser()->getPays()]);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $file = $form['file_vente']->getData();

                if ($file) {
                    $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    // this is needed to safely include the file name as part of the URL
                    $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                    $newFilename = $safeFilename . '-' . uniqid() . '.' . 'pdf';
                    // Move the file to the directory where brochures are stored
                    try {
                        $file->move(
                            $this->getParameter('condition_vente_directory'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                        // ... handle exception if something happens during file upload
                    }

                    // updates the 'brochureFilename' property to store the PDF file name
                    // instead of its contents
                    $station->setFileVente($newFilename);

                }

                $this->getDoctrine()->getManager()->flush();
               /* $referer = $request->request->get('referer');
                if ($referer == "") return $this->redirectToRoute('station_index');
                return $this->redirect($request->request->get('referer'));*/
                return $this->redirectToRoute('station_index',array('page'=>$page));
            }

            return $this->render('@Backend/gestionnaire/station/edit.html.twig', [
                'station' => $station,
                'form' => $form->createView(),
            ]);
        }
        else{
           /* $referer = $request->request->get('referer');
            if ($referer == "") return $this->redirectToRoute('station_index');
            return $this->redirect($request->request->get('referer'));*/
            return $this->redirectToRoute('station_index',array('page'=>$page));
        }

    }



    /**
     * @Route("/pdf", name="station_pdf", methods={"GET"})
     */
    public function pdf(StationRepository $stationRepository)
    {

        $stations=$stationRepository->findStationsByUser($this->getUser()->getPays());

        $stationsNote = array();
        foreach ($stations as $station){
            $st= array();
            $s=0;
            $ts=0;
            $hs=0;
            foreach ($station->getAvis() as $avis) {
                if($avis->getNote() == 0){
                    $s=$s + 1;
                }
                if($avis->getNote() == 1){
                    $ts=$ts + 1;
                }
                if($avis->getNote() == 2) {
                    $hs=$hs + 1;
                }
            }
            if($s+ $ts + $hs == 0){
                $st["noteglobal"] = 0;
            }
            else{
                $st["noteglobal"] =(($hs * 100)+ ($ts * 50)+ ($s  * 0))/($s+ $ts + $hs);
            }
            $st["s"] = $s;
            $st["ts"] = $ts;
            $st["hs"] = $hs;
            $st["id"] = $station->getId();
            $st["nom"] = $station->getNom();
            $st["adresse"] = $station->getAdresse();
            $st["employes"] = $station->getEmployes();
            $st["avis"] = $station->getAvis();
            $st["createdAt"] = $station->getCreatedAt();
            $st["updatedAt"] = $station->getUpdatedAt();
            $st["isActive"] = $station->getIsActive();

            $stationsNote[] = $st;
        }



        $pdfOptions = new Options();
        $pdfOptions->set('viewport-size', '1024x768');
        $pdfOptions->setIsRemoteEnabled(true);
        $pdfOptions->set('tempDir', __DIR__ . '/site_uploads');
        $pdfOptions->set('isRemoteEnabled', TRUE);
        $pdfOptions->set('debugKeepTemp', TRUE);
        $pdfOptions->set('chroot', '/'); // Just for testing :)
        $pdfOptions->set('isHtml5ParserEnabled', true);
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('file/pdfstation.html.twig', [
            'stations' => $stationsNote,
             'pays' => $this->getUser()->getPays()
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("stations.pdf", [
            "Attachment" => true
        ]);

        $dompdf->output();

       return $this->redirectToRoute('station_index');

    }
    /**
     * disable station.
     *
     * @Route("/{id}/{page}/disable", name="station_disable", methods={"GET"})
     */
    public function disableAction(Station $station,$page)
    {
        $em = $this->getDoctrine()->getManager();
        $onestation =$em->getRepository('WebBundle:Station')->find($station->getId());
        $onestation->setIsDeleted(true);
        $onestation->setIsActive(false);
        $em->persist($onestation);
        $em->flush();
        return $this->redirectToRoute('station_index',array('page'=>$page));
    }
    /**
     * descative station.
     *
     * @Route("/{id}/{page}/descative", name="station_descative", methods={"GET"})
     */
    public function descativeAction(Station $station,$page)
    {
        $em = $this->getDoctrine()->getManager();
        $onestation =$em->getRepository('WebBundle:Station')->find($station->getId());
        $onestation->setIsActive(!$onestation->getIsActive());
        $em->persist($onestation);
        $em->flush();
        return $this->redirectToRoute('station_index',array('page'=>$page));
    }
    /**
     * @Route("/Liste_des_stations", name="ExportStation" ,defaults={"_format"="xls","_filename"="Liste_des_stations"}, requirements={"_format"="csv|xls|xlsx"})
     * @Template("@Backend/excel/StationExcel.xlsx.twig")
     */
    public function ExportModeleAction($_filename, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        parse_str(parse_url($this->getRequest()->headers->get('referer'), PHP_URL_QUERY), $output);
        if(array_key_exists('search',$output)) $search=$output['search']; else $search='';

        $stations =$em->getRepository('WebBundle:Station')->getStationByPays($this->getUser()->getPays(),$search);
       // dump($stations);die();
        return $this->render('@Backend/excel/StationExcel.xlsx.twig', array(
            'Modeles' => $stations,
        ));
    }
}
