<?php

namespace BackendBundle\Controller\GestionnairePays;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use WebBundle\Entity\Commande_Produit;
use WebBundle\Entity\Produits;
use WebBundle\Form\ProduitsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
/**
 * Produits controller.
 *
 * @Route("/commande")
 */
class CommandeController extends Controller
{
    /**
     * Lists all Produits entities.
     *
     * @Route("/", name="commande_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $reference=$request->get('reference','');
        $client=$request->get('client','');
        $station=$request->get('station','');
        $statutcommande=$request->get('statutcommande','');
        $statutpayement=$request->get('statutpayement','');
        $remboursement=$request->get('remboursement','');
        $periode=$request->get('periode','');
        $start=$request->get('start','');
        $end=$request->get('end','');
        $checkbox=$request->get('checkbox',[]);

        $page= $request->query->getInt('page', 1);

        //dump($request);die;
        $query = $em->getRepository('WebBundle:Commande_Produit')->GetCommandeByPays($this->getuser()->getPays(),$reference,$client,$statutcommande,$statutpayement,$remboursement,$periode,$start,$end,$station);
/*

        $paginator = $this->get('knp_paginator');

        $commandes = $paginator->paginate(
            $query, $page, 10
        );

        $commandes->setUsedRoute('commande_index_paginated');

 */
        $paginator = $this->get('knp_paginator');

        $commandes = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10/*limit per page*/
        );

        $stations =$em->getRepository('WebBundle:Station')->getStationByPays($this->getUser()->getPays(),'');
        return $this->render('@Backend/gestionnaire/commande/index.html.twig', array(
            'commandes' => $commandes,
            'reference' =>$reference,
            'client'=> $client,
            'statutcommande'=> $statutcommande,
            'statutpayement'=> $statutpayement,
            'remboursement'=> $remboursement,
            'periode'=> $periode,
            'start'=> $start,
            'end'=> $end,
            'station'=> $station,
            'stations'=> $stations,
            'checkbox'=> $checkbox,
            'nbcommandes' => $query,
            'page' => $page,

        ));
    }


    /**
     * Finds and displays a Produits entity.
     *
     * @Route("/show/{id}", name="commande_show", defaults={"page": 1})
     * @Route("/page/{page}", requirements={"page": "[1-9]\d*"}, name="commandes_show_paginated")
     * @Method("GET")
     */
    public function showAction( $id,$page)
    {

        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('WebBundle:Commandes')->find($id);

        if($commande && ($commande->getPays() == $this->getUser()->getPays())){
            $query= $em->getRepository('WebBundle:Commande_Produit')->GetProduitByCommande($commande);
            $paginator = $this->get('knp_paginator');
            $commande_produit = $paginator->paginate(
                $query, $page, 10
            //Produits::NUM_ITEMS
            );
            return $this->render('@Backend/gestionnaire/commande/show.html.twig', array(
                'commande' => $commande,
                'commande_produit' => $commande_produit,
            ));
        }
        else{
            return $this->redirectToRoute('commande_index');
        }

    }

    /**
     * Displays a form to edit an existing Produits entity.
     *
     * @Route("/edit/{id}/{page}/{remboursement}", name="commnde_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction($id,$remboursement,Request $request,$page)
    {

        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('WebBundle:Commandes')->find($id);
        $referer = $request->headers->get('referer');
        if($commande && ($commande->getPays() == $this->getUser()->getPays())){
            $commande->setRemboursement($remboursement);
            $em->merge($commande);
            $em->flush();

        /*   if($referer == "") return $this->redirectToRoute('commande_index');
            return new RedirectResponse($referer);*/
            return $this->redirectToRoute('commande_index',array('page'=>$page));
        }

        /*if($referer == "") return $this->redirectToRoute('commande_index');
        return new RedirectResponse($referer);*/
        return $this->redirectToRoute('commande_index',array('page'=>$page));
    }
    /**
     * @Route("/rembourser", name="rembourserCommande")
     */
    public function rembouserAction( Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        parse_str(parse_url($this->getRequest()->headers->get('referer'), PHP_URL_QUERY), $output);

        if(array_key_exists('reference',$output)) $reference=$output['reference']; else $reference='';
        if(array_key_exists('client',$output))  $client=$output['client']; else $client='';
        if(array_key_exists('station',$output))  $station=$output['station']; else $station='';
        if(array_key_exists('statutcommande',$output)) $statutcommande=$output['statutcommande']; else $statutcommande='';
        if(array_key_exists('statutpayement',$output))  $statutpayement=$output['statutpayement']; else $statutpayement='';
        if(array_key_exists('remboursement',$output))  $remboursement=$output['reference']; else $remboursement='';
        if(array_key_exists('periode',$output)) $periode=$output['periode']; else $periode='';
        if(array_key_exists('start',$output))  $start=$output['start']; else $start='';
        if(array_key_exists('end',$output))  $end=$output['end']; else $end='';
      //  if(array_key_exists('checkbox',$output))  $checkbox=$output['checkbox']; else $checkbox=[];
//dump($);die;
        $checkbox=$request->query->get('checkbox',[]);
       // dump($request->query->get('checkbox'));die;
        $commandes_produits = $em->getRepository('WebBundle:Commande_Produit')->GetCommandeByPays($this->getuser()->getPays(),$reference,$client,$statutcommande,$statutpayement,$remboursement,$periode,$start,$end,$station);
        $commandes = array();
        foreach ($commandes_produits as $cp){
            if(($cp['0']->getCommande()->getPays() == $this->getUser()->getPays()) && in_array( $cp['0']->getCommande()->getId(),$checkbox)){
                $cp['0']->getCommande()->setRemboursement(1);
                $em->merge($cp['0']->getCommande());
                $commandes[]= $cp['0']->getCommande()->getId();
            }

        }
        $em->flush();
        $referer = $request->headers->get('referer');
        //dump( new JsonResponse($commandes_produits));die;
       // return new JsonResponse($commandes_produits);



            $response = new JsonResponse();
        //var_dump($response->setData(array('ville' => $villes)));die();
        return $response->setData(array('produits' => $commandes));
    }
    /**
     * @Route("/Liste_des_commandes", name="ExportCommande" ,defaults={"_format"="xls","_filename"="Liste_des_commandes"}, requirements={"_format"="csv|xls|xlsx"})
     * @Template("@Backend/excel/CommandeExcel.xlsx.twig")
     */
    public function ExportModeleAction($_filename, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        parse_str(parse_url($this->getRequest()->headers->get('referer'), PHP_URL_QUERY), $output);

        if(array_key_exists('reference',$output)) $reference=$output['reference']; else $reference='';
        if(array_key_exists('client',$output))  $client=$output['client']; else $client='';
        if(array_key_exists('station',$output))  $station=$output['station']; else $station='';
        if(array_key_exists('statutcommande',$output)) $statutcommande=$output['statutcommande']; else $statutcommande='';
        if(array_key_exists('statutpayement',$output))  $statutpayement=$output['statutpayement']; else $statutpayement='';
        if(array_key_exists('remboursement',$output))  $remboursement=$output['reference']; else $remboursement='';
        if(array_key_exists('periode',$output)) $periode=$output['periode']; else $periode='';
        if(array_key_exists('start',$output))  $start=$output['start']; else $start='';
        if(array_key_exists('end',$output))  $end=$output['end']; else $end='';

        $commandes = $em->getRepository('WebBundle:Commande_Produit')->GetCommandeByPays($this->getuser()->getPays(),$reference,$client,$statutcommande,$statutpayement,$remboursement,$periode,$start,$end,$station);
        return $this->render('@Backend/excel/CommandeExcel.xlsx.twig', array(
            'Modeles' => $commandes,
        ));
    }
    /**
     * @Route("/Details_commandes/{_filename}/{id}", name="ExportDetailsCommande" ,defaults={"_format"="xls","_filename"="Details_commandes"}, requirements={"_format"="csv|xls|xlsx"})
     * @Template("@Backend/excel/DetailsCommandeExcel.xlsx.twig")
     */
    public function ExportDetailsCommandeAction($_filename,$id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $commande = $em->getRepository('WebBundle:Commandes')->find($id);
        $produits= $em->getRepository('WebBundle:Commande_Produit')->GetProduitByCommande($commande);

        return $this->render('@Backend/excel/DetailsCommandeExcel.xlsx.twig', array(
            'commande' => $commande,
            'produits' => $produits,

        ));
    }
}
