<?php

namespace BackendBundle\Controller\GestionnairePays;


use BackendBundle\Form\ZoneType;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use WebBundle\Entity\Zone;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/zone")
 */
class ZoneController extends Controller
{
    /**
     *
     * @Route("/", name="zone_index")
     * @Method("GET")
     */
    public function index(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $search=$request->get('search',"");
        $page= $request->query->getInt('page', 1);

        $zones =$em->getRepository('WebBundle:Zone')->getZoneByPays($this->getUser()->getPays(),$search);

        /*
                 $paginator = $this->get('knp_paginator');
        $zones_paginator = $paginator->paginate(
            $zones, $page, 10
        //Produits::NUM_ITEMS
        );
        $zones_paginator->setUsedRoute('zone_index_paginated');

         */

        $paginator = $this->get('knp_paginator');

        $zones_paginator = $paginator->paginate(
            $zones, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10/*limit per page*/
        );
        return $this->render('@Backend/gestionnaire/zone/index.html.twig', [
            'zones' => $zones_paginator,
            'search' => $search,
            'nbzones' => $zones,
            'page' => $page,

        ]);
    }

    /**
     * @Route("/new", name="zone_new", methods={"GET","POST"})
     */
    public function newAction(Request $request)
    {
        $zone = new Zone();
        $form = $this->createForm(ZoneType::class, $zone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {



            $entityManager = $this->getDoctrine()->getManager();
            $zone->setPays($this->getUser()->getPays());
            $zone->setIsActive(true);
            $entityManager->persist($zone);
            $entityManager->flush();
            $referer =$request->request->get('referer');
            if($referer == "") return $this->redirectToRoute('zone_index');
            return $this->redirect($request->request->get('referer'));
          //  return $this->redirectToRoute('zone_index');
        }

        return $this->render('@Backend/gestionnaire/zone/new.html.twig', [
            'zone' => $zone,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}/{page}/edit", name="zone_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Zone $zone,$page)
    {
        if($zone->getPays() == $this->getUser()->getPays()) {
            $form = $this->createForm(ZoneType::class, $zone);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {



                $this->getDoctrine()->getManager()->flush();
              /*  $referer = $request->request->get('referer');
                if ($referer == "") return $this->redirectToRoute('zone_index');
                return $this->redirect($request->request->get('referer'));*/
                return $this->redirectToRoute('zone_index',array('page'=>$page));

                // return $this->redirectToRoute('zone_index');
            }

            return $this->render('@Backend/gestionnaire/zone/edit.html.twig', [
                'zone' => $zone,
                'form' => $form->createView(),
            ]);
        }
        else{
           /* $referer = $request->request->get('referer');
            if ($referer == "") return $this->redirectToRoute('zone_index');
            return $this->redirect($request->request->get('referer'));*/
            return $this->redirectToRoute('zone_index',array('page'=>$page));

        }

    }



    /**
     * @Route("/pdf", name="zone_pdf", methods={"GET"})
     */
    public function pdf(ZoneRepository $zoneRepository)
    {

        $zones=$zoneRepository->findZonesByUser($this->getUser()->getPays());

        $zonesNote = array();
        foreach ($zones as $zone){
            $st= array();
            $s=0;
            $ts=0;
            $hs=0;
            foreach ($zone->getAvis() as $avis) {
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
            $st["id"] = $zone->getId();
            $st["nom"] = $zone->getNom();
            $st["adresse"] = $zone->getAdresse();
            $st["employes"] = $zone->getEmployes();
            $st["avis"] = $zone->getAvis();
            $st["createdAt"] = $zone->getCreatedAt();
            $st["updatedAt"] = $zone->getUpdatedAt();
            $st["isActive"] = $zone->getIsActive();

            $zonesNote[] = $st;
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
        $html = $this->renderView('file/pdfzone.html.twig', [
            'zones' => $zonesNote,
             'pays' => $this->getUser()->getPays()
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("zones.pdf", [
            "Attachment" => true
        ]);

        $dompdf->output();

       return $this->redirectToRoute('zone_index');

    }
    /**
     * disable zone.
     *
     * @Route("/{id}/{page}/disable", name="zone_disable", methods={"GET"})
     */
    public function disableAction(Zone $zone,$page)
    {
        $em = $this->getDoctrine()->getManager();
        $onezone =$em->getRepository('WebBundle:Zone')->find($zone->getId());
        $onezone->setIsDeleted(true);
        $onezone->setIsActive(false);
        $em->persist($onezone);
        $em->flush();
        return $this->redirectToRoute('zone_index',array('page'=>$page));
    }

    /**
     * @Route("/Liste_des_zones", name="ExportZone" ,defaults={"_format"="xls","_filename"="Liste_des_zones"}, requirements={"_format"="csv|xls|xlsx"})
     * @Template("@Backend/excel/ZoneExcel.xlsx.twig")
     */
    public function ExportModeleAction($_filename, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        parse_str(parse_url($this->getRequest()->headers->get('referer'), PHP_URL_QUERY), $output);
        if(array_key_exists('search',$output)) $search=$output['search']; else $search='';

        $zones =$em->getRepository('WebBundle:Zone')->getZoneByPays($this->getUser()->getPays(),$search);
        return $this->render('@Backend/excel/ZoneExcel.xlsx.twig', array(
            'Modeles' => $zones,
        ));
    }
}
