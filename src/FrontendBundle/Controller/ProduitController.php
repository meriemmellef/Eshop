<?php

namespace FrontendBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/produit")
 */
class ProduitController extends BaseController
{
    /**
     * @Route(path="/", name="list_produit")
     */
    public function indexAction(Request $request)
    {
        $this->initEntityManager();
        $this->initSession();
        $this->initStation();



       // $categorie_id = $this->getRequest()->query->get('categorie_id', "");
        $categorie_id = $request->get('categorie_id', "");
        $sub_categorie_id = $request->get('sub_categorie_id', "");
        $unite_id = $request->get('unite_id', "");
        $keyword = $request->get('keyword', "");
        $max_price = $request->get('max_price', "");
        $min_price = $request->get('min_price', "");
        $sort = $request->get('sortby', "");
        $categorie="";
        $categoriec="";

       //dump($keyword);die();

        $sort_by="" ;
        $station_id = $this->session->get("station_id", "");
        switch ($sort) {

            case 1:
                $sort_by = "created_at";
                break;
            case 2:
                $sort_by = "nb_achat";
                break;
            case 3:
                $sort_by = "prix";
                break;
            default:
                $sort_by = "";
        }



        if ($categorie_id == "" && $sub_categorie_id == "" && $keyword == "") {
            $categorie_id = -1;
           $sub_categorie_id = -1;
        }
        if ($sub_categorie_id==""){

            $findProduits = $this->getProduitsWithoutsubcatgerorie($unite_id, $categorie_id, $min_price, $max_price, $sort_by, $keyword, $station_id);

        }else{
        $findProduits = $this->getProduitsFiltred($unite_id, $categorie_id, $min_price, $max_price, $sort_by, $keyword, $sub_categorie_id, $station_id);

        }





        $produits = $this->get('knp_paginator')->paginate($findProduits, $this->get('request')->query->get('page', 1), 16);

       // dump($produits);die();

        if ($this->session->has('panier'))
            $panier = $this->session->get('panier');
        else
            $panier = false;

        $request = $this->container->get('request');
        $routeName = $request->get('_route');

        if ($categorie_id == "" && $sub_categorie_id != "") {
            $categorie = $this->em->getRepository("WebBundle:SousCategories")->findOneById($sub_categorie_id);
           if($categorie) $categorie_id = $categorie->getCategorieId();

        }
        if ($categorie_id !== ""){
            $categoriec = $this->em->getRepository("WebBundle:Categories")->findOneById($categorie_id);

        }
        $pays = $this->pays;
        $code = "mg" ;
        if ($pays){
            $code = $pays->getCode();
        }

        $sous_categories = $this->em->getRepository("WebBundle:SousCategories")->getListSousCategorie($code,$this->station_id,$categorie_id);
        if($this->getUser())$favoris = $this->getDoctrine()->getRepository('WebBundle:Favoris')->getfavorisByUser( $this->getUser()->getId());
        else $favoris=null;

        ////render les categorie in coutry

        $categories_collection = $this->getDoctrine()->getRepository("WebBundle:Categories")->getAllCategories($this->pays->getCode(),$this->station_id);
        $categories = array("auto"=>array(),"food"=>array(),"clothing"=>array(),"other"=>array());
        foreach ($categories_collection as $category) {
            $categories["other"][] = $category;
        }
        //
       // dump($categoriec);
       // dump($categorie);
        return $this->render('FrontendBundle:Produit:index.html.twig', array('produits' => $produits,
            'panier' => $panier, 'cp' => $routeName, "sous_categories" => $sous_categories,'favoris'=>$favoris, 'categories'=>$categories,"categorie"=>$categoriec,"subcategorie"=>$categorie));
    }


    /**
     * @Route(path="/{id}", name="showproduit")
     */
    public function showAction(Request $request, $id)
    {
        $em = $this->initEntityManager();
        if($request->get('produitid') ) $produit = $this->getOneProduitById($request->get('produitid'));
        else $produit = $this->getOneProduitById($id);
        $produits = $this->getProduitBy(array("categorie" => $produit->getCategorie()));
        $produits_similaire = $this->get('knp_paginator')->paginate($produits, $this->get('request')->query->get('page', 1), 4);
        $sizes= $this->em->getRepository("WebBundle:Size")->getSizeByProduit($id);

        return $this->render('FrontendBundle:Produit:show.html.twig', array("produit" => $produit, "sizes" => $sizes,"produits_similaire" => $produits_similaire, 'cp' => "produitsPage"));
    }




}
