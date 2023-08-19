<?php

namespace BackendBundle\Controller\GestionnairePays;


use BackendBundle\Form\GerantType;
use BackendBundle\Form\PaysType;
use BackendBundle\Utils\ExportExcelStyle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;
use WebBundle\Entity\Pays;
use WebBundle\Entity\Utilisateurs;
use WebBundle\Repository\PaysRepository;
use Symfony\Component\Intl\Intl;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/client")
 */
class ClientController extends Controller
{

    /**
     *
     * @Route("/", name="client_index")
     * @Method("GET")
     */
    public function index(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $email=$request->get('email',"");
        $station=$request->get('station',"");
        $clients =$em->getRepository('WebBundle:Utilisateurs')->getClientByRoleAndPays($email, $this->getUser()->getPays(),$station);
        $stations =$em->getRepository('WebBundle:Station')->getStationByPays($this->getUser()->getPays(),'');
        $page= $request->query->getInt('page', 1);

        /*
              $paginator = $this->get('knp_paginator');
        $clients_paginator = $paginator->paginate(
            $clients, $page, 10
        );
        $clients_paginator->setUsedRoute('client_index_paginated');
         */
        $paginator = $this->get('knp_paginator');

        $clients_paginator = $paginator->paginate(
            $clients, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10/*limit per page*/
        );

        return $this->render('@Backend/gestionnaire/client/index.html.twig', [
            'email' => $email,
            'clients' => $clients_paginator,
            'nbclients' => $clients,
            'station'=> $station,
            'stations'=> $stations,
            'page'=> $page,


        ]);

    }


    /**
     * @Route("/{id}/detail", name="client_detail", methods={"GET","POST"})
     */
    public function edit(Request $request, Utilisateurs $client)
    {



      /*  return $this->render('@Backend/gestionnaire/gerant/edit.html.twig', [
            'gerant' => $gerant,
            'form' => $form->createView(),
        ]);*/
    }


    /**
     * @Route("/Liste_des_clients", name="ExportClient" ,defaults={"_format"="xls","_filename"="Liste_des_clients"}, requirements={"_format"="csv|xls|xlsx"})
     * @Template("@Backend/excel/ClientExcel.xlsx.twig")
     */
    public function ExportModeleAction($_filename, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        parse_str(parse_url($this->getRequest()->headers->get('referer'), PHP_URL_QUERY), $output);

        if(array_key_exists('email',$output)) $email=$output['email']; else $email='';
        $gerants =$em->getRepository('WebBundle:Utilisateurs')->getClientByPays($this->getUser()->getPays()->getId(),$email);
        return $this->render('@Backend/excel/ClientExcel.xlsx.twig', array(
            'Modeles' => $gerants,
        ));
    }
}
