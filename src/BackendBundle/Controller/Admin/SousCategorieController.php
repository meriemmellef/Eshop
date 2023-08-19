<?php

namespace BackendBundle\Controller\Admin;


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
 * @Route("/sous_categorie_admin")
 */
class SousCategorieController extends Controller
{

    /**
     *
     * @Route("/", name="sous_categorie_admin_index")
     * @Method("GET")
     */
    public function index(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $search=$request->get('search',"");
        $categorie_id=$request->get('categorie_id',"");
        $page= $request->query->getInt('page', 1);

      //  $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieByPays($this->getUser()->getPays(),$search,$categorie_id);
      //  $categories =$em->getRepository('WebBundle:Categories')->getCategorieByPays($this->getUser()->getPays(),"");

        $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieAdminALL($search,$categorie_id);
        $categories =$em->getRepository('WebBundle:Categories')->getCategorieAdminAll("");
      //  dump($souscategories);die();


      /*  $paginator = $this->get('knp_paginator');
        $souscategories_paginator = $paginator->paginate(
            $souscategories, $page, 10
        );
        $souscategories_paginator->setUsedRoute('sous_categorie_admin_index_paginated');*/

        $paginator = $this->get('knp_paginator');

        $souscategories_paginator = $paginator->paginate(
            $souscategories, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10/*limit per page*/
        );
        return $this->render('@Backend/admin/souscategorie/index.html.twig', [
            'souscategories' => $souscategories_paginator,
            'categories' => $categories,
            'search' => $search,
            'categorie_id'=>$categorie_id,
            'nbsouscategories' => $souscategories,
            'page' => $page,

        ]);
    }

    /**
     * @Route("/new", name="sous_categorie_admin_new", methods={"GET","POST"})
     */
    public function newAction(Request $request)
    {
      //  $formOptions = array('pays' => $this->getUser()->getPays());
        $formOptions = array('pays' => null);
        $souscategorie = new SousCategories();
        $form = $this->createForm(SousCategorieType::class, $souscategorie,$formOptions);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();


        if ($form->isSubmitted() && $form->isValid()) {
            $image=  $form->get('imagefile')->getData();
            $nomEn=  $form->get('nom_en')->getData();
            $nomFR=  $form->get('nom')->getData();

            /*was if (!$nomFR){
                return $this->render('@Backend/admin/souscategorie/new.html.twig', [
                    'souscategorie' => $souscategorie,
                    'form' => $form->createView(),
                    'error' => "2",
                ]);
            }
            if (!$nomEn){
                return $this->render('@Backend/admin/souscategorie/new.html.twig', [
                    'souscategorie' => $souscategorie,
                    'form' => $form->createView(),
                    'error' => "2",
                ]);
            }*/



            $categoEn =$em->getRepository('WebBundle:SousCategories')->findOneBy(array("nom_en"=>$nomEn,"pays"=>null));
            $categoFr =$em->getRepository('WebBundle:SousCategories')->findOneBy(array("nom"=>$nomFR,"pays"=>null));

            if ($categoFr){

                return $this->render('@Backend/admin/souscategorie/new.html.twig', [
                    'souscategorie' => $souscategorie,
                    'form' => $form->createView(),
                    'error' => "1",
                ]);
            }elseif ($categoEn){

                return $this->render('@Backend/admin/souscategorie/new.html.twig', [
                    'souscategorie' => $souscategorie,
                    'form' => $form->createView(),
                    'error' => "1",
                ]);
            }

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
            //$souscategorie->setPays($this->getUser()->getPays());
           // $souscategorie->setPays(null);
            $entityManager->persist($souscategorie);
            $entityManager->flush();
          /*  $referer =$request->request->get('referer');
            if($referer == "") return $this->redirectToRoute('sous_categorie_admin_index');
            return $this->redirect($request->request->get('referer'));*/
             return $this->redirectToRoute('sous_categorie_admin_index');
        }

        return $this->render('@Backend/admin/souscategorie/new.html.twig', [
            'souscategorie' => $souscategorie,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}/{page}/edit", name="sous_categorie_admin_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SousCategories $sousCategorie,$page)
    {
        $startNameFR = $sousCategorie->getNom() ;
        $startNameEN = $sousCategorie->getNomEn() ;

        // $formOptions = array('pays' => $this->getUser()->getPays());
        $formOptions = array('pays' => null);
        $form = $this->createForm(SousCategorieType::class, $sousCategorie,$formOptions);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();


        if ($form->isSubmitted() && $form->isValid()) {
            $nomEn=  $form->get('nom_en')->getData();
            $nomFR=  $form->get('nom')->getData();

            if (!$nomFR){
                return $this->render('@Backend/admin/souscategorie/edit.html.twig', [
                    'souscategorie' => $sousCategorie,
                    'form' => $form->createView(),
                    'error' => "2",
                ]);
            }
            if (!$nomEn){
                return $this->render('@Backend/admin/souscategorie/edit.html.twig', [
                    'souscategorie' => $sousCategorie,
                    'form' => $form->createView(),
                    'error' => "2",
                ]);
            }


            if ($startNameEN!=$nomEn){
                $scategoEn =$em->getRepository('WebBundle:SousCategories')->findOneBy(array("nom_en"=>$nomEn,"pays"=>null));
                if ($scategoEn){

                    return $this->render('@Backend/admin/souscategorie/edit.html.twig', [
                        'souscategorie' => $sousCategorie,
                        'form' => $form->createView(),
                        'error' => "1",
                    ]);
                }
            }

            if ($startNameFR!=$nomFR){
                $scategoFr =$em->getRepository('WebBundle:SousCategories')->findOneBy(array("nom"=>$nomFR,"pays"=>null));

                if ($scategoFr){

                    return $this->render('@Backend/admin/souscategorie/edit.html.twig', [
                        'souscategorie' => $sousCategorie,
                        'form' => $form->createView(),
                        'error' => "1",
                    ]);
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
          //  $sousCategorie->setPays(null);

            $this->getDoctrine()->getManager()->flush();
            /*$referer =$request->request->get('referer');
            if($referer == "") return $this->redirectToRoute('sous_categorie_admin_index');
            return $this->redirect($request->request->get('referer'));*/
           return $this->redirectToRoute('sous_categorie_admin_index',array('page'=>$page));
        }

        return $this->render('@Backend/admin/souscategorie/edit.html.twig', [
            'souscategorie' => $sousCategorie,
            'form' => $form->createView(),
        ]);
       /* if($sousCategorie->getPays() == $this->getUser()->getPays()){
            $formOptions = array('pays' => $this->getUser()->getPays());
            $form = $this->createForm(SousCategorieType::class, $sousCategorie,$formOptions);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
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
                $referer =$request->request->get('referer');
                if($referer == "") return $this->redirectToRoute('sous_categorie_admin_index');
                return $this->redirect($request->request->get('referer'));
                //  return $this->redirectToRoute('sous_categorie_index');
            }

            return $this->render('@Backend/admin/souscategorie/edit.html.twig', [
                'souscategorie' => $sousCategorie,
                'form' => $form->createView(),
            ]);
        }
        else{
            $referer =$request->request->get('referer');
            if($referer == "") return $this->redirectToRoute('sous_categorie_admin_index');
            return $this->redirect($request->request->get('referer'));
        }*/

    }

    /**
     * disable station.
     *
     * @Route("/{id}/{page}/disable", name="sous_categorie_admin_disable", methods={"GET"})
     */
    public function disableAction(SousCategories $souscategorie,$page)
    {
        $em = $this->getDoctrine()->getManager();
        $onesouscategorie =$em->getRepository('WebBundle:SousCategories')->find($souscategorie->getId());
        $onesouscategorie->setIsActive(!$onesouscategorie->getIsActive());
        $em->merge($onesouscategorie);
        $em->flush();
        return $this->redirectToRoute('sous_categorie_admin_index',array('page'=>$page));


    }


    /**
     * disable station.
     *
     * @Route("/{id}/{page}/delete", name="sous_categorie_admin_delete", methods={"GET"})
     */
    public function deleteAction(SousCategories $souscategorie,$page)
    {
        $em = $this->getDoctrine()->getManager();
        $onesouscategorie =$em->getRepository('WebBundle:SousCategories')->find($souscategorie->getId());
        //  if($onesouscategorie&&($onesouscategorie->getPays() == $this->getUser()->getPays())){
        $em->remove($onesouscategorie);
      //  $em->persist($onesouscategorie);
        $em->flush();
        return $this->redirectToRoute('sous_categorie_admin_index');
        /* }
         else{
             return $this->redirectToRoute('sous_categorie_admin_index');
         }*/
    }
    /**
     * @Route("/Liste_des_sous_categories", name="ExportSousCategorieAdmin" ,defaults={"_format"="xls","_filename"="Liste_des_sous_categories"}, requirements={"_format"="csv|xls|xlsx"})
     * @Template("@Backend/excel/SousCategorieExcel.xlsx.twig")
     */
    public function ExportModeleAction($_filename, Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        parse_str(parse_url($this->getRequest()->headers->get('referer'), PHP_URL_QUERY), $output);

        if(array_key_exists('search',$output)) $search=$output['search']; else $search='';
        if(array_key_exists('categorie_id',$output)) $categorie_id=$output['categorie_id']; else $categorie_id='';

      //  $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieAdmin($search,$categorie_id);
        $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieAdminALL($search,$categorie_id);
        return $this->render('@Backend/excel/SousCategorieExcel.xlsx.twig', array(
            'Modeles' => $souscategories,
        ));
    }






}
