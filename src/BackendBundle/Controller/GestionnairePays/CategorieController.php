<?php

namespace BackendBundle\Controller\GestionnairePays;


use BackendBundle\Form\CategorieType;
use BackendBundle\Form\StationType;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use WebBundle\Entity\Categories;
use WebBundle\Entity\Couleur;
use WebBundle\Entity\Produits;
use WebBundle\Entity\Size;
use WebBundle\Entity\SousCategories;
use WebBundle\Entity\Station;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
/**
 * @Route("/categorie")
 */
class CategorieController extends Controller
{

    /**
     *
     * @Route("/", name="categorie_index")
     * @Method("GET")
     */
    public function index(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $search=$request->get('search',"");
        $page= $request->query->getInt('page', 1);

        $resultArray=[];
        //$categories =$em->getRepository('WebBundle:Categories')->getCategorieByPays($this->getUser()->getPays(),$search);
        //        $categoriesSuperadmin =$em->getRepository('WebBundle:Categories')->getCategorieAdmin($search);
        $categories =$em->getRepository('WebBundle:Categories')->getCategorieByPaysAll($this->getUser()->getPays(),$search);
        $categoriesSuperadmin =$em->getRepository('WebBundle:Categories')->getCategorieAdminAll($search);
        if ($categoriesSuperadmin && $categories){
            //sdump($checkedproduits);die();

            foreach ($categoriesSuperadmin as $categoriesSup) {

                    foreach ($categories as $categorie){
                        if ($categoriesSup["id"]==$categorie["parent_id"]){
                            $key = array_search($categoriesSup, $categoriesSuperadmin);

                            unset($categoriesSuperadmin[$key]);

                        }

                    }


            }
        }

        $resultArray = array_merge($categories, $categoriesSuperadmin);


      /*  $paginator = $this->get('knp_paginator');
        $categories_paginator = $paginator->paginate(
            $resultArray, $page, 10
        );
        $categories_paginator->setUsedRoute('categorie_index_paginated');*/
        $paginator = $this->get('knp_paginator');

        $categories_paginator = $paginator->paginate(
            $resultArray, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10/*limit per page*/
        );
        return $this->render('@Backend/gestionnaire/categorie/index.html.twig', [
            'categories' => $categories_paginator,
            'search' => $search,
            'nbcategories' => $resultArray,
            'pays' => $this->getUser()->getPays(),
            'page' => $page,
        ]);
    }

    /**
     * @Route("/new", name="categorie_new", methods={"GET","POST"})
     */
    public function newAction(Request $request)
    {
        $categorie = new Categories();
        $formOptions = array('pays' => $this->getUser()->getPays());
        $entityManager = $this->getDoctrine()->getManager();
        ////////////////////

        $form = $this->createForm(CategorieType::class, $categorie,$formOptions);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categorie->setPays($this->getUser()->getPays());
            ///////
            $pays = $this->getUser()->getPays();
            if ($pays->getFrontLanguage()=='fr' || $pays->getFrontLanguage()=='FR'){
                $nomFR=  $form->get('nom')->getData();
                $categoFr =$entityManager->getRepository('WebBundle:Categories')->findOneBy(array("nom"=>$nomFR,"pays"=>null));
                $categoFr1 =$entityManager->getRepository('WebBundle:Categories')->findOneBy(array("nom"=>$nomFR,"pays"=>$this->getUser()->getPays()));
                if ($categoFr||$categoFr1){

                    return $this->render('@Backend/gestionnaire/categorie/new.html.twig', [
                        'categorie' => $categorie,
                        'form' => $form->createView(),
                        'pays' => $this->getUser()->getPays(),
                        'error'=>"1"

                    ]);
                }else{
                    $categorie->setNomEn($nomFR)  ;
                }

            }else{
                $nomEn=  $form->get('nom_en')->getData();

                $categoEn =$entityManager->getRepository('WebBundle:Categories')->findOneBy(array("nom_en"=>$nomEn,"pays"=>null));
                $categoEn1 =$entityManager->getRepository('WebBundle:Categories')->findOneBy(array("nom_en"=>$nomEn,"pays"=>$this->getUser()->getPays()));

                if ($categoEn || $categoEn1){


                    return $this->render('@Backend/gestionnaire/categorie/new.html.twig', [
                        'categorie' => $categorie,
                        'form' => $form->createView(),
                        'pays' => $this->getUser()->getPays(),
                        'error'=>"1"

                    ]);
                }else{
                    $categorie->setNom($nomEn)  ;

                }
            }


            ////////////

            $entityManager->persist($categorie);
            $entityManager->flush();
         /*   $referer =$request->request->get('referer');
            if($referer == "") return $this->redirectToRoute('categorie_index');
            return $this->redirect($request->request->get('referer'));*/
        return $this->redirectToRoute('categorie_index');
        }

        return $this->render('@Backend/gestionnaire/categorie/new.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView(),
            'pays' => $this->getUser()->getPays()

        ]);
    }


    /**
     *
     * @Route("/activer", name="categorie_activer", defaults={"page": 1})
     * @Route("/page/{page}", requirements={"page": "[1-9]\d*"}, name="categorie_activer_index_paginated")
     * @Method("GET")
     */
    public function activerindex(Request $request,$page)
    {

        $em = $this->getDoctrine()->getManager();
        $search=$request->get('search',"");

        $categorieSuperadmin =$em->getRepository('WebBundle:Categories')->getCategorieAdmin($search);
        $categoriePays =$em->getRepository('WebBundle:Categories')->getCategorieByPays($this->getUser()->getPays(),"");
        //////////
        ///
        $checkedCategories= $request->get("checkboxvar","");
      //  dump($checkedCategories);die();

        if ($checkedCategories){
            //sdump($checkedproduits);die();
         //   foreach ($checkedCategories as $checkedCategorie){

                ///create categorie  entity
                $selectCategoriId =  $checkedCategories;
                $selectCategorie = $em->getRepository('WebBundle:Categories')->find($selectCategoriId);
                $categoriee = new Categories();

                $categoriee->setNom($selectCategorie->getNom());
                $categoriee->setNomEn($selectCategorie->getNomEn());
                $categoriee->setPays($this->getUser()->getPays());
                $categoriee->setIsActive(true);
                $categoriee->setIsAuto($selectCategorie->getIsAuto());
                $categoriee->setIsClothing($selectCategorie->getIsClothing());
                $categoriee->setIsFood($selectCategorie->getIsFood());
                $categoriee->setParentId($selectCategorie->getId());
                $categoriee->setCreatedAt(new \DateTime());
                $em->persist($categoriee);



                ///create sous_categorie  entity
            $selectSousCategories = $em->getRepository('WebBundle:SousCategories')->findBy(array('categorie_id'=>$selectCategorie->getId()));


            if ($selectSousCategories){
                foreach($selectSousCategories as $selectSousCategorie){
                    $SousCategoriee = new SousCategories();
                    $SousCategoriee->setCategorie($categoriee);
                    $SousCategoriee->setNom($selectSousCategorie->getNom());
                    $SousCategoriee->setNomEn($selectSousCategorie->getNomEn());
                    $SousCategoriee->setImage($selectSousCategorie->getImage());
                    $SousCategoriee->setPays($this->getUser()->getPays());
                    $SousCategoriee->setIsActive(true);
                    $SousCategoriee->setParentId($selectSousCategorie->getId());
                    $em->persist($SousCategoriee);
                }
            }


            $em->flush();

            return $this->redirectToRoute('categorie_index');



        }

      /*  if ( $categorieSuperadmin){
            foreach ($categorieSuperadmin as $categorieSup){
                if ($categoriePays){
                    foreach ($categoriePays as $categoriePy){

                        if ($categorieSup['id']===$categoriePy['parent_id']){
                            $key = array_search($categorieSup, $categorieSuperadmin);

                            unset($categorieSuperadmin[$key]);

                        }

                    }
                }

            }
        }

        /// ////

        $paginator = $this->get('knp_paginator');
        $categories_paginator = $paginator->paginate(
            $categorieSuperadmin, $page, 10
        //Produits::NUM_ITEMS
        );
        $categories_paginator->setUsedRoute('categorie_activer_index_paginated');
        return $this->render('@Backend/gestionnaire/categorie/activercategorie.html.twig', [
            'categories' => $categories_paginator,
            'nbcategories' => $categorieSuperadmin,
            'pays' => $this->getUser()->getPays()


        ]);*/
    }

    /**
     * @Route("/{id}/{page}/edit", name="categorie_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Categories $categorie,$page)
    {
        $startNameFR = $categorie->getNom() ;
        $startNameEN = $categorie->getNomEn() ;

        $referer =$request->request->get('referer');
        $entityManager = $this->getDoctrine()->getManager();

        if($categorie->getPays() == $this->getUser()->getPays()){
            $formOptions = array('pays' => $this->getUser()->getPays());

            $form = $this->createForm(CategorieType::class, $categorie,$formOptions);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                ///////
                $pays = $this->getUser()->getPays() ;

                if ($pays->getFrontLanguage()=='fr' || $pays->getFrontLanguage()=='FR'){
                    $nomFR=  $form->get('nom')->getData();
                    if ($nomFR!=$startNameFR){



                    $categoFr =$entityManager->getRepository('WebBundle:Categories')->findOneBy(array("nom"=>$nomFR,"pays"=>null));
                    $categoFr1 =$entityManager->getRepository('WebBundle:Categories')->findOneBy(array("nom"=>$nomFR,"pays"=>$this->getUser()->getPays()));

                    if ($categoFr||$categoFr1) {

                        return $this->render('@Backend/gestionnaire/categorie/edit.html.twig', [
                            'categorie' => $categorie,
                            'form' => $form->createView(),
                            'pays' => $this->getUser()->getPays(),
                            'error' => "1"

                        ]);
                    }
                    }
                }else{
                    $nomEn=  $form->get('nom_en')->getData();
                    if ($nomEn!=$startNameEN) {

                        $categoEn = $entityManager->getRepository('WebBundle:Categories')->findOneBy(array("nom_en" => $nomEn, "pays" => null));
                        $categoEn1 = $entityManager->getRepository('WebBundle:Categories')->findOneBy(array("nom_en" => $nomEn, "pays" => $this->getUser()->getPays()));


                        if ($categoEn || $categoEn1) {

                            return $this->render('@Backend/gestionnaire/categorie/edit.html.twig', [
                                'categorie' => $categorie,
                                'form' => $form->createView(),
                                'pays' => $this->getUser()->getPays(),
                                'error' => "1"

                            ]);
                        }
                    }
                }


                ////////////
                $this->getDoctrine()->getManager()->flush();

              /*  if($referer == "") return $this->redirectToRoute('categorie_index');
                return $this->redirect($request->request->get('referer'));*/

                return $this->redirectToRoute('categorie_index',array('page'=>$page));

            }
            return $this->render('@Backend/gestionnaire/categorie/edit.html.twig', [
                'categorie' => $categorie,
                'form' => $form->createView(),
                'pays' => $this->getUser()->getPays()

            ]);
        }
        else{
            return $this->redirectToRoute('categorie_index',array('page'=>$page));

          /*  if($referer == "") return $this->redirectToRoute('categorie_index');
            return $this->redirect($request->request->get('referer'));*/
        }



    }


    /**
     * disable station.
     *
     * @Route("/{id}/{page}/disable", name="categorie_disable", methods={"GET"})
     */
    public function disableAction(Categories $categorie,$page)
    {
        if($categorie->getPays() == $this->getUser()->getPays()){

            $em = $this->getDoctrine()->getManager();
            $onecategorie =$em->getRepository('WebBundle:Categories')->find($categorie->getId());
            //////

            ///create sous_categorie  entity

            $selectSousCategories = $em->getRepository('WebBundle:SousCategories')->findBy(array('categorie_id'=>$onecategorie->getId()));


            if ($selectSousCategories){
                foreach($selectSousCategories as $selectSousCategorie){
                    $selectSousCategorie->setIsActive(!$onecategorie->getIsActive());
                    $em->persist($selectSousCategorie);
                }
            }
            $onecategorie->setIsActive(!$onecategorie->getIsActive());
            $em->persist($onecategorie);


            $em->flush();
            return $this->redirectToRoute('categorie_index',array('page'=>$page));
        }
        else{
            return $this->redirectToRoute('categorie_index',array('page'=>$page));
        }
    }

    /**
     * delete station.
     *
     * @Route("/{id}/{page}/delete", name="categorie_delete", methods={"GET"})
     */
    public function deleteAction(Categories $categorie,$page)
    {
        if($categorie->getPays() == $this->getUser()->getPays()){
            $em = $this->getDoctrine()->getManager();
            $onecategorie =$em->getRepository('WebBundle:Categories')->find($categorie->getId());
            try {
                $em->remove($onecategorie);
                $em->flush();

            }catch (\Exception $exception){

            }
            return $this->redirectToRoute('categorie_index',array('page'=>$page));
        }
        else{
            return $this->redirectToRoute('categorie_index',array('page'=>$page));
        }
    }

    /**
     * @Route("/Liste_des_categories", name="ExportCategorie" ,defaults={"_format"="xls","_filename"="Liste_des_categories"}, requirements={"_format"="csv|xls|xlsx"})
     * @Template("@Backend/excel/CategorieExcel.xlsx.twig")
     */
    public function ExportModeleAction($_filename, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        parse_str(parse_url($this->getRequest()->headers->get('referer'), PHP_URL_QUERY), $output);

        if(array_key_exists('search',$output)) $search=$output['search']; else $search='';

        $categories =$em->getRepository('WebBundle:Categories')->getCategorieByPays($this->getUser()->getPays(),$search);
        return $this->render('@Backend/excel/CategorieExcel.xlsx.twig', array(
            'Modeles' => $categories,
        ));
    }

    }
