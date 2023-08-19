<?php

namespace BackendBundle\Controller\GerantStation;


use BackendBundle\Form\HoraireType;
use Proxies\__CG__\WebBundle\Entity\Station;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/horaire_gerant")
 */
class HoraireController extends Controller
{
/*
    public function index(Request $request): Response
    {

        $em = $this->getDoctrine()->getManager();
        $station=$em->getRepository('WebBundle:Station')->find($this->getUser()->getStation()->getId());
        $form = $this->createForm(HoraireType::class, $station);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->merge($station);
            $em->flush();
            return $this->redirectToRoute('horaire_gerant_index');
        }


        return $this->render('@Backend/gerant/horaire/index.html.twig', [
            'station' => $station,
            'form' => $form->createView(),
        ]);

    }
*/


    /**
     * @Route("/", name="horaire_gerant_index", methods={"GET","POST"})

     */
    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $station=$em->getRepository('WebBundle:Station')->find($this->getUser()->getStation()->getId());
       if($station && ($station->getPays()==$this->getUser()->getPays())){
           $parametrages=new Station();
        if ($request->isMethod('POST')) {

            $livraison=$request->get('livraison','off');
            if($request->get('listHoraires')){
                $listHoraire=$request->get('listHoraires');
                $is_open=$request->get('isOpen','0');


                foreach ($listHoraire as  $value){
                    if(!in_array($value,$station->getHoraires())){
                        $station->addHoraire($value);
                    }
                }

                foreach ($station->getHoraires()  as  $value){
                    if(!in_array($value,$listHoraire)){
                        $station->removeHoraire($value);
                    }
                }


                $station->setIsOpen($is_open);
            }/*elseif ($station->getHoraires() || !$request->get('listHoraires') ){
                return $this->render('@Backend/gerant/horaire/horaire.html.twig', [
                    'station' => $station,
                    'horaires'=>$parametrages::$horaire_values,
                    'errorhor' =>'errorhor'
                ]);
            }*/
            if($livraison== 'on'){
                $station->setIsDelivered(true);
                $station->setPrixLivraison($request->get('prix'));
                $station->setMinprixLivraison($request->get('prixmin'));
            }
            if($livraison== 'off'){
                $station->setIsDelivered(false);
                $station->setPrixLivraison(0);
                $station->setMinprixLivraison(0);

            }

           $em->merge($station);
           $em->flush();
        }


        return $this->render('@Backend/gerant/horaire/horaire.html.twig', [
            'station' => $station,
            'horaires'=>$parametrages::$horaire_values
        ]);

       }
       else{
           return $this->redirectToRoute('horaire_gerant_index');
       }

    }



    /**
     * @Route("/pick", name="pick_up_time", methods={"GET","POST"})

     */
    public function pickUpTime(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $station=$em->getRepository('WebBundle:Station')->find($this->getUser()->getStation()->getId());
        if($station && ($station->getPays()==$this->getUser()->getPays())){
            $parametrages=new Station();
            if ($request->isMethod('POST')) {

                $livraison=$request->get('livraison','off');
                if($request->get('listHoraires')){
                    $listHoraire=$request->get('listHoraires');
                    $is_open=$request->get('isOpen','0');


                    foreach ($listHoraire as  $value){
                        if(!in_array($value,$station->getHoraires())){
                            $station->addHoraire($value);
                        }
                    }

                    foreach ($station->getHoraires()  as  $value){
                        if(!in_array($value,$listHoraire)){
                            $station->removeHoraire($value);
                        }
                    }


                    $station->setIsOpen($is_open);
                }elseif ($station->getHoraires() || !$request->get('listHoraires') ){
                return $this->render('@Backend/gerant/horaire/horaire.html.twig', [
                    'station' => $station,
                    'horaires'=>$parametrages::$horaire_values,
                    'errorhor' =>'errorhor'
                ]);
            }


                $em->merge($station);
                $em->flush();
            }


            return $this->render('@Backend/gerant/horaire/horaire.html.twig', [
                'station' => $station,
                'horaires'=>$parametrages::$horaire_values
            ]);

        }
        else{
            return $this->redirectToRoute('horaire_gerant_index');
        }

    }


    /**
     * @Route("/Liste_des_clients_gerant", name="ExportClient_gerant" ,defaults={"_format"="xls","_filename"="Liste_des_clients"}, requirements={"_format"="csv|xls|xlsx"})
     * @Template("@Backend/excel/ClientExcel.xlsx.twig")
     */
    public function ExportModeleAction($_filename, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $email=$request->get('email',"");
        $gerants =$em->getRepository('WebBundle:Utilisateurs')->getClientByStation($this->getUser()->getStation(),$email);
        return $this->render('@Backend/excel/ClientExcel.xlsx.twig', array(
            'Modeles' => $gerants,
        ));
    }
}
