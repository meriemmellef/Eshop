<?php

namespace BackendBundle\Controller\GerantStation;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WebBundle\Entity\Commande_Produit;
use WebBundle\Entity\Produits;
use WebBundle\Form\ProduitsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
/**
 * Produits controller.
 *
 * @Route("/commandegerant")
 */
class CommandeController extends Controller
{
    /**
     * Lists all Produits entities.
     *
     * @Route("/", name="commande_gerant_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $reference=$request->get('reference','');
        $client=$request->get('client','');
        $statutcommande=$request->get('statutcommande','');
        $statutpayement=$request->get('statutpayement','');
        $remboursement=$request->get('remboursement','');
        $periode=$request->get('periode','');
        $start=$request->get('start','');
        $end=$request->get('end','');
        $page= $request->query->getInt('page', 1);

        $query = $em->getRepository('WebBundle:Commande_Produit')->GetCommandeByStation($this->getuser()->getStation(),$reference,$client,$statutcommande,$statutpayement,$remboursement,$periode,$start,$end);
/*
        $paginator = $this->get('knp_paginator');

        $commandes = $paginator->paginate(
            $query, $page, 10
        );
        $commandes->setUsedRoute('commande_gerant_index_paginated');*/

        $paginator = $this->get('knp_paginator');

        $commandes = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10/*limit per page*/
        );
        return $this->render('@Backend/gerant/commande/index.html.twig', array(
            'commandes' => $commandes,
            'reference' =>$reference,
            'client'=> $client,
            'statutcommande'=> $statutcommande,
            'statutpayement'=> $statutpayement,
            'remboursement'=> $remboursement,
            'periode'=> $periode,
            'start'=> $start,
            'end'=> $end,
            'nbcommandes' => $query,
            'page' => $page,


        ));
    }


    /**
     * Finds and displays a Produits entity.
     *
     * @Route("/show/{id}", name="commande_gerant_show", defaults={"page": 1})
     * @Route("/page/{page}", requirements={"page": "[1-9]\d*"}, name="commandes_gerant_show_paginated")
     * @Method("GET")
     */
    public function showAction( $id,$page,Request $request)
    { 
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('WebBundle:Commandes')->find($id);
        if($commande && ($commande->getPays() == $this->getUser()->getPays())) {
            $query = $em->getRepository('WebBundle:Commande_Produit')->GetProduitByCommande($commande);
        // dump($query);die;
             
            $paginator = $this->get('knp_paginator');
            $commande_produit = $paginator->paginate(
                $query, $page, 10
            //Produits::NUM_ITEMS
            );
            return $this->render('@Backend/gerant/commande/show.html.twig', array(
                'commande' => $commande,
                'commande_produit' => $commande_produit,
            ));
        }
        else{
            return $this->redirectToRoute('commande_gerant_index');
        }
    }
    /**
     * Lists all Produits entities.
     *
     * @Route("/nondispo", name="nondispo")
     * @Method("POST")
     */
    public function nondisponibleAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        if ($request->isXmlHttpRequest()) {
            $id = $request->get('id');
            $produit= $em->getRepository("WebBundle:Commande_Produit")->find($id);
            $prix=$produit->getPrix();
            $commande=$produit->getCommande();
            $commande->setPrix($commande->getPrix()-$prix);
            $em->remove($produit);
            $em->flush();
            $response = new JsonResponse();
        }
        return $response->setData(array('retour' => $id));
    }

    /**
     * Displays a form to edit an existing Produits entity.
     *
     * @Route("/edit/{id}/{statut}/{page}", name="commnde_gerant_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction($id,$statut,Request $request,$page)
    {

        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('WebBundle:Commandes')->find($id);
        $referer = $request->headers->get('referer');
        if($commande && ($commande->getPays() == $this->getUser()->getPays())) {


            /*  if ($statut==3){
                  $commande->setDateReception(new \DateTime());
              }
              else*/
            if ($statut == 4) {
                $commandeproduits=$commande->getCommandesproduits();
                $reverse_quantite=0;
                foreach($commandeproduits as $cp){
                    $produit=$cp->getProduit();
                    $last_quantite=$produit->getQuantite();
                    $reverse_quantite=$cp->getQuantite();
                    $produit->setQuantite($last_quantite+$reverse_quantite);
                    $em->flush();
                }
                $commande->setDateAnnulation(new \DateTime());
                $commande->setStatutpayement(0);

            }

            //added by  rahma

            if ($statut == 3) {
                $commande->setStatutpayement(1);
            }



            $commande->setStatutCommande($statut);
            $em->merge($commande);
            $em->flush();

            /*if ($referer == "") return $this->redirectToRoute('commande_gerant_index');
            return new RedirectResponse($referer);*/
            // return $this->redirectToRoute('commande_gerant_index');
            return $this->redirectToRoute('commande_gerant_index',array('page'=>$page));
        }
       else{
         /*  if($referer == "") return $this->redirectToRoute('commande_gerant_index');
           return new RedirectResponse($referer);*/
           return $this->redirectToRoute('commande_gerant_index',array('page'=>$page));
       }
    }
    /**
     * @Route("/Liste_gerant_des_commandes", name="ExportGerantCommande" ,defaults={"_format"="xls","_filename"="Liste_gerant_des_commandes"}, requirements={"_format"="csv|xls|xlsx"})
     * @Template("@Backend/excel/CommandeExcel.xlsx.twig")
     */
    public function ExportModeleAction($_filename, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        parse_str(parse_url($this->getRequest()->headers->get('referer'), PHP_URL_QUERY), $output);

        if(array_key_exists('reference',$output)) $reference=$output['reference']; else $reference='';
        if(array_key_exists('client',$output))  $client=$output['client']; else $client='';
        if(array_key_exists('statutcommande',$output)) $statutcommande=$output['statutcommande']; else $statutcommande='';
        if(array_key_exists('statutpayement',$output))  $statutpayement=$output['statutpayement']; else $statutpayement='';
        if(array_key_exists('remboursement',$output))  $remboursement=$output['reference']; else $remboursement='';
        if(array_key_exists('periode',$output)) $periode=$output['periode']; else $periode='';
        if(array_key_exists('start',$output))  $start=$output['start']; else $start='';
        if(array_key_exists('end',$output))  $end=$output['end']; else $end='';

        $commandes =  $em->getRepository('WebBundle:Commande_Produit')->GetCommandeByStation($this->getuser()->getStation(),$reference,$client,$statutcommande,$statutpayement,$remboursement,$periode,$start,$end);
        return $this->render('@Backend/excel/gerant/CommandeExcel.xlsx.twig', array(
            'Modeles' => $commandes,
        ));
    }
    /**
     * @Route("/Details_gerant_commandes/{_filename}/{id}", name="ExportDetailsGerantCommande" ,defaults={"_format"="xls","_filename"="Details_gerant_commandes"}, requirements={"_format"="csv|xls|xlsx"})
     * @Template("@Backend/excel/DetailsCommandeExcel.xlsx.twig")
     */
    public function ExportDetailsCommandeAction($_filename,$id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $commande = $em->getRepository('WebBundle:Commandes')->find($id);
        $produits= $em->getRepository('WebBundle:Commande_Produit')->GetProduitByCommande($commande);

        return $this->render('@Backend/excel/gerant/DetailsCommandeExcel.xlsx.twig', array(
            'commande' => $commande,
            'produits' => $produits,

        ));
    }
}
