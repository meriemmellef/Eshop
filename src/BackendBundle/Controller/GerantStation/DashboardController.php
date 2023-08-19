<?php

namespace BackendBundle\Controller\GerantStation;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
/**
 * @Route("/dashboard_gerant")
 */
class DashboardController extends Controller
{

    /**
     *
     * @Route("/", name="dashboard_gerant_index", methods={"GET","POST"})
     */
    public function index(Request $request)
    {
        $cj=0;$cs=0;$cm=0;$ca=0;
        $now=new \DateTime("now");
        $date=new \DateTime("now");
        $date=$date->add(\DateInterval::createFromDateString('-7 days'));
        //   dump($now);die;
        $user= $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $query = $em->getRepository('WebBundle:Commandes')->GetCommandeByStation($this->getUser()->getStation());
        //dump($query);die;

        foreach ($query as $c) {


            if ($c->getDateReception() and $c->getDateReception()->format("Y-m-d") == $now->format("Y-m-d")) {
                $cj = $cj+1;
            }
            if ($c->getDateReception() and $c->getDateReception()->format("Y-m") == $now->format("Y-m")) {
                $cm = $cm+1;
            }
            if ($c->getDateReception() and $c->getDateReception()->format("Y") == $now->format("Y")) {
                $ca = $ca+1;
            }
            if (($c->getDateReception() and $c->getDateReception()->format("Y-m-d") <= $now->format("Y-m-d")) and ( $date->format("Y-m-d")<= $c->getDateReception()->format("Y-m-d"))  ) {
                $cs = $cs+1;
            }

        }

        //dump($cj.'/'.$cm.'/'.$ca.'/'.$cs);die;
        $em = $this->getDoctrine()->getManager();

       //was $produits =$em->getRepository('WebBundle:Produits')->getProduitByPays($this->getUser()->getPays(),"","","","");
        $produits =$em->getRepository('WebBundle:Produits')->getProduitByPaysStation($this->getUser()->getPays(),"","","",$this->getUser()->getStation()->getId());
        //$clients =$em->getRepository('WebBundle:Utilisateurs')->getClientByPays($this->getUser()->getPays()->getId(),"");
        $clients =$em->getRepository('WebBundle:Utilisateurs')->getClientByPaysStation($this->getUser()->getPays(),"",$this->getUser()->getStation()->getId());

        $pays = $user->getPays() ;
        $language = "fr";

        if ($pays){
            $language= $pays->getFrontLanguage() ;
        }
        if (!$language){
            $language = "fr";
        }

        $this->get('session')->set('_locale', $language);
        return $this->render('@Backend/gerant/dashboard/index.html.twig',array(
            'cj'=>$cj,
            'cs'=>$cs,
            'cm'=>$cm,
            'ca'=>$ca,
            'produits'=>$produits,
            'clients'=>$clients,


        ));

    }


    }
