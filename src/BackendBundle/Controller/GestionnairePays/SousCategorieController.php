<?php

namespace BackendBundle\Controller\GestionnairePays;


use BackendBundle\Form\CategorieType;
use BackendBundle\Form\SousCategorieType;
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
use WebBundle\Entity\SousCategories;
use WebBundle\Entity\Station;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/sous_categorie")
 */
class SousCategorieController extends Controller
{

    /**
     *
     * @Route("/", name="sous_categorie_index")
     * @Method("GET")
     */
    public function index(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $search=$request->get('search',"");
        $categorie_id=$request->get('categorie_id',"");
        $page= $request->query->getInt('page', 1);

       // $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieByPays($this->getUser()->getPays(),$search,$categorie_id);
        //$categories =$em->getRepository('WebBundle:Categories')->getCategorieByPays($this->getUser()->getPays(),$search);
        //$SousCategoriesSuperAdmin = $em->getRepository('WebBundle:SousCategories')->getSousCategorieAdmin($search,$categorie_id);

        $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieByPaysAll($this->getUser()->getPays(),$search,$categorie_id);
        $categories =$em->getRepository('WebBundle:Categories')->getCategorieByPaysAll($this->getUser()->getPays(),$search);
        /////////////////////////////////////////////////////////////
        $SousCategoriesSuperAdmin = $em->getRepository('WebBundle:SousCategories')->getSousCategorieAdminALL($search,$categorie_id);
        $SouCategorieArray = $souscategories;
        $SousCategorieSuperAdS = [];
        if ($SousCategoriesSuperAdmin) {
                foreach ($SousCategoriesSuperAdmin as $SubCatSuAdmin) {
                    if ($souscategories) {
                        foreach ($souscategories as $souscat) {
                            if ($souscat["parent_id"] === $SubCatSuAdmin["id"]) {
                                $key = array_search($SubCatSuAdmin, $SousCategoriesSuperAdmin);

                                unset($SousCategoriesSuperAdmin[$key]);

                            }
                        }


                    }

                }
        }
        $SouCategorieArray =  array_merge( $souscategories,$SousCategoriesSuperAdmin);

        /*  if ($SousCategoriesSuperAdmin){
              foreach ($SousCategoriesSuperAdmin as $SousCatSupAd){
                  foreach ($categories as $categori){
                      //check if the categorie of those sub categorie is active in country :
                      if ($SousCatSupAd["categorie_id"] == $categori["parent_id"]){
                          $SousCategorieSuperAdS[] =  $SousCatSupAd ;
                        //  dump($SousCategorieSuperAdS);
                      }

                  }


              }
          // dump($SousCategorieSuperAdS);die();
            //  die();

              if ($SousCategorieSuperAdS){
                  foreach ($SousCategorieSuperAdS as $SubCatSuAdmin){
                      if ($souscategories){
                          foreach ($souscategories as $souscat){
                              if ($souscat["parent_id"]===$SubCatSuAdmin["id"]){
                                  $key = array_search($SubCatSuAdmin, $SousCategorieSuperAdS);

                                  unset($SousCategorieSuperAdS[$key]);

                              }
                          }


                      }

                  }

              }


              $SouCategorieArray =  array_merge($SousCategorieSuperAdS, $souscategories);

          }*/

        /////////////////////////////////////////////////////////////
        /*
          $paginator = $this->get('knp_paginator');
        $souscategories_paginator = $paginator->paginate(
            $SouCategorieArray, $page, 10
        );
        $souscategories_paginator->setUsedRoute('sous_categorie_index_paginated');
         */
        $paginator = $this->get('knp_paginator');

        $souscategories_paginator = $paginator->paginate(
            $SouCategorieArray, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10/*limit per page*/
        );
        return $this->render('@Backend/gestionnaire/souscategorie/index.html.twig', [
            'souscategories' => $souscategories_paginator,
            'categories' => $categories,
            'search' => $search,
            'categorie_id'=>$categorie_id,
            'nbsouscategories' => $SouCategorieArray,
            'pays' => $this->getUser()->getPays(),
            'page' => $page


        ]);
    }

    /**
     *
     * @Route("/activer", name="sous_categorie_activer", defaults={"page": 1})
     * @Route("/page/{page}", requirements={"page": "[1-9]\d*"}, name="sous_categorie_ctiv_index_paginated")
     * @Method("GET")
     */
    public function activerindex(Request $request,$page)
    {

        $em = $this->getDoctrine()->getManager();
        $search=$request->get('search',"");

        $categoriePays =$em->getRepository('WebBundle:Categories')->getCategorieByPays($this->getUser()->getPays(),"");

        $SouscategorieSuperadmin =$em->getRepository('WebBundle:SousCategories')->getSousCategorieAdmin($search,"");
        $SouscategorieInPays =$em->getRepository('WebBundle:SousCategories')->getSousCategorieByPays($this->getUser()->getPays(),$search,"");

        //////////
        ///
        $checkedSCategories= $request->get("checkboxvar","");

        if ($checkedSCategories){
           // dump($checkedSCategories);die();
          //  foreach ($checkedSCategories as $checkedSCategorie){
                ///create sous_categorie  entity
                $selectSousCategorie = $em->getRepository('WebBundle:SousCategories')->find($checkedSCategories);
                $categoriee = $em->getRepository('WebBundle:Categories')->findOneBy(array('parent_id'=>$selectSousCategorie->getCategorieId()));
                if ($categoriee){
                   // dump($categoriee);die();

                    $SousCategoriee = new SousCategories();
                    $SousCategoriee->setCategorie($categoriee);
                    $SousCategoriee->setNom($selectSousCategorie->getNom());
                    $SousCategoriee->setImage($selectSousCategorie->getImage());
                    $SousCategoriee->setNomEn($selectSousCategorie->getNomEn());
                    $SousCategoriee->setPays($this->getUser()->getPays());
                    $SousCategoriee->setIsActive(true);
                    $SousCategoriee->setParentId($selectSousCategorie->getId());
                    $SousCategoriee->setCategorieId($categoriee->getId());
                    $em->persist($SousCategoriee);
                    $em->flush();

                }else{
                  //  dump("elseee");die();
                   // return $this->redirect($request->request->get('referer'));

                    return $this->redirectToRoute('sous_categorie_index',['errorc'=> '1']);

                }


            //}

            return $this->redirectToRoute('sous_categorie_index');

        }
        return $this->redirectToRoute('sous_categorie_index');

        /*  $Souscategories= array();

          if ($SouscategorieSuperadmin){
              foreach ($SouscategorieSuperadmin as $SouscategorieSupe){
                  if ($categoriePays){
                      foreach ($categoriePays as $categoriePy){

                          if ($SouscategorieSupe['categorie_id']===$categoriePy['parent_id']){
                              $Souscategories[]= $SouscategorieSupe ;
                          }

                      }
                  }

              }
          }
         if ($Souscategories){
             foreach ($Souscategories as $Souscategorie){
                 if ($SouscategorieInPays){
                     foreach ($SouscategorieInPays as $ScatInPay){
                         if ($Souscategorie['id']===$ScatInPay['parent_id']){
                             $key = array_search($Souscategorie, $Souscategories);

                             unset($Souscategories[$key]);

                         }

                     }


                     }

             }


         }


          $paginator = $this->get('knp_paginator');
          $scategories_paginator = $paginator->paginate(
              $Souscategories, $page, 10
          //Produits::NUM_ITEMS
          );
          $scategories_paginator->setUsedRoute('sous_categorie_ctiv_index_paginated');
          return $this->render('@Backend/gestionnaire/souscategorie/activer_sous_categorie.html.twig', [
              'souscategories' => $scategories_paginator,
              'nbsouscategories' => $Souscategories,
              'pays' => $this->getUser()->getPays()


          ]);*/
    }


    /**
     * @Route("/new", name="sous_categorie_new", methods={"GET","POST"})
     */
    public function newAction(Request $request)
    {
        $formOptions = array('pays' => $this->getUser()->getPays());
        $souscategorie = new SousCategories();
        $form = $this->createForm(SousCategorieType::class, $souscategorie,$formOptions);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        if ($form->isSubmitted() && $form->isValid()) {
            $pays = $this->getUser()->getPays();
            if ($pays->getFrontLanguage()=='EN' || $pays->getFrontLanguage()=='en'){
                $nomEn=  $form->get('nom_en')->getData();
                 $categoEn =$em->getRepository('WebBundle:SousCategories')->findOneBy(array("nom_en"=>$nomEn,"pays"=>null));
                $categoEn1 =$em->getRepository('WebBundle:SousCategories')->findOneBy(array("nom_en"=>$nomEn,"pays"=>$this->getUser()->getPays()));
                if ($categoEn || $categoEn1 ){
                    return $this->render('@Backend/gestionnaire/souscategorie/new.html.twig', [
                        'souscategorie' => $souscategorie,
                        'form' => $form->createView(),
                        'error' => "2",
                        'pays' => $this->getUser()->getPays()

                    ]);

                }else{
                    $souscategorie->setNomEn($nomEn);
                    $souscategorie->setNom($nomEn);

                }
            }else{
                $nomFR=  $form->get('nom')->getData();
                 $categoFr =$em->getRepository('WebBundle:SousCategories')->findOneBy(array("nom"=>$nomFR,"pays"=>null));
                 $categoFr1 =$em->getRepository('WebBundle:SousCategories')->findOneBy(array("nom"=>$nomFR,"pays"=>$this->getUser()->getPays()));

                 if ($categoFr || $categoFr1){

                     return $this->render('@Backend/gestionnaire/souscategorie/new.html.twig', [
                         'souscategorie' => $souscategorie,
                         'form' => $form->createView(),
                         'error' => "2",
                         'pays' => $this->getUser()->getPays()

                     ]);
                 }else{
                     $souscategorie->setNom($nomFR);

                     $souscategorie->setNomEn($nomFR);

                 }
            }




            $image=  $form->get('imagefile')->getData();
            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.'png';

                try {
                    $image->move(
                        $this->getParameter('image_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }
                $souscategorie->setImage($newFilename);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $souscategorie->setPays($this->getUser()->getPays());
            $entityManager->persist($souscategorie);
            $entityManager->flush();
         /*   $referer =$request->request->get('referer');
            if($referer == "") return $this->redirectToRoute('sous_categorie_index');
            return $this->redirect($request->request->get('referer'));*/
          return $this->redirectToRoute('sous_categorie_index');
        }

        return $this->render('@Backend/gestionnaire/souscategorie/new.html.twig', [
            'souscategorie' => $souscategorie,
            'form' => $form->createView(),
            'pays' => $this->getUser()->getPays()

        ]);
    }


    /**
     * @Route("/{id}/{page}/edit", name="sous_categorie_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SousCategories $sousCategorie,$page)
    {
        $startNameFR = $sousCategorie->getNom() ;
        $startNameEN = $sousCategorie->getNomEn() ;

        if($sousCategorie->getPays() == $this->getUser()->getPays()){
            $formOptions = array('pays' => $this->getUser()->getPays());
            $form = $this->createForm(SousCategorieType::class, $sousCategorie,$formOptions);
            $form->handleRequest($request);
            $em = $this->getDoctrine()->getManager();

            if ($form->isSubmitted() && $form->isValid()) {
                $pays = $this->getUser()->getPays();
                if ($pays->getFrontLanguage()=='en' || $pays->getFrontLanguage()=='EN'){
                    $nomEn=  $form->get('nom_en')->getData();
                    if ($nomEn!=$startNameEN){
                        $categoEn =$em->getRepository('WebBundle:SousCategories')->findOneBy(array("nom_en"=>$nomEn,"pays"=>null));
                        $categoEn1 =$em->getRepository('WebBundle:SousCategories')->findOneBy(array("nom_en"=>$nomEn,"pays"=>$this->getUser()->getPays()));

                        if ($categoEn || $categoEn1 ){
                            return $this->render('@Backend/gestionnaire/souscategorie/edit.html.twig', [
                                'souscategorie' => $sousCategorie,
                                'form' => $form->createView(),
                                'error' => "2",
                                'pays' => $this->getUser()->getPays()

                            ]);

                        }
                    }

                }else{
                    $nomFR=  $form->get('nom')->getData();
                    if ($nomFR!=$startNameFR) {

                        $categoFr = $em->getRepository('WebBundle:SousCategories')->findOneBy(array("nom" => $nomFR, "pays" => null));
                        $categoFr1 = $em->getRepository('WebBundle:SousCategories')->findOneBy(array("nom" => $nomFR, "pays" => $this->getUser()->getPays()));
                        if ($categoFr || $categoFr1) {

                            return $this->render('@Backend/gestionnaire/souscategorie/edit.html.twig', [
                                'souscategorie' => $sousCategorie,
                                'form' => $form->createView(),
                                'error' => "2",
                                'pays' => $this->getUser()->getPays()
                            ]);
                        }
                    }
                }




                $image=  $form->get('imagefile')->getData();
                if ($image) {
                    $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.'png';

                    try {
                        $image->move(
                            $this->getParameter('image_directory'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                    }
                    $sousCategorie->setImage($newFilename);
                }
                $this->getDoctrine()->getManager()->flush();
             /*   $referer =$request->request->get('referer');
                if($referer == "") return $this->redirectToRoute('sous_categorie_index');
                return $this->redirect($request->request->get('referer'));*/
                 return $this->redirectToRoute('sous_categorie_index',array('page'=>$page));
            }

            return $this->render('@Backend/gestionnaire/souscategorie/edit.html.twig', [
                'souscategorie' => $sousCategorie,
                'form' => $form->createView(),
                'pays' => $this->getUser()->getPays()

            ]);
        }
        else{
            return $this->redirectToRoute('sous_categorie_index',array('page'=>$page));

            /*$referer =$request->request->get('referer');
            if($referer == "") return $this->redirectToRoute('sous_categorie_index');
            return $this->redirect($request->request->get('referer'));*/
        }

    }


    /**
     * disable station.
     *
     * @Route("/{id}/{page}/disable", name="sous_categorie_disable", methods={"GET"})
     */
    public function disableAction(SousCategories $souscategorie,$page)
    {
        $em = $this->getDoctrine()->getManager();
        $onesouscategorie =$em->getRepository('WebBundle:SousCategories')->find($souscategorie->getId());
        if($onesouscategorie&&($onesouscategorie->getPays() == $this->getUser()->getPays())){
            $onesouscategorie->setIsActive(!$onesouscategorie->getIsActive());
            $em->merge($onesouscategorie);
            $em->flush();
            return $this->redirectToRoute('sous_categorie_index',array('page'=>$page));
        }
        else{
            return $this->redirectToRoute('sous_categorie_index',array('page'=>$page));
        }
    }

    /**
     * delete station.
     *
     * @Route("/{id}/{page}/delete", name="sous_categorie_delete", methods={"GET"})
     */
    public function deleteAction(SousCategories $souscategorie,$page)
    {
        $em = $this->getDoctrine()->getManager();
        $onesouscategorie =$em->getRepository('WebBundle:SousCategories')->find($souscategorie->getId());
        if($onesouscategorie&&($onesouscategorie->getPays() == $this->getUser()->getPays())){
          //  $onesouscategorie->setIsActive(false);
            try {
                $em->remove($onesouscategorie);
                $em->flush();

            }catch (\Exception $exception){

            }

            return $this->redirectToRoute('sous_categorie_index',array('page'=>$page));
        }
        else{
            return $this->redirectToRoute('sous_categorie_index',array('page'=>$page));
        }
    }
    /**
     * @Route("/Liste_des_sous_categories", name="ExportSousCategorie" ,defaults={"_format"="xls","_filename"="Liste_des_sous_categories"}, requirements={"_format"="csv|xls|xlsx"})
     * @Template("@Backend/excel/SousCategorieExcel.xlsx.twig")
     */
    public function ExportModeleAction($_filename, Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        parse_str(parse_url($this->getRequest()->headers->get('referer'), PHP_URL_QUERY), $output);

        if(array_key_exists('search',$output)) $search=$output['search']; else $search='';
        if(array_key_exists('categorie_id',$output)) $categorie_id=$output['categorie_id']; else $categorie_id='';

        $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieByPays($this->getUser()->getPays(),$search,$categorie_id);
        return $this->render('@Backend/excel/SousCategorieExcel.xlsx.twig', array(
            'Modeles' => $souscategories,
        ));
    }

    }
