<?php

namespace BackendBundle\Controller\Admin;


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
use WebBundle\Entity\Station;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
/**
 * @Route("/categorieadmin")
 */
class CategorieController extends Controller
{

    /**
     *
     * @Route("/", name="categorie_admin_index")
     * @Method("GET")
     */
    public function index(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $search=$request->get('search',"");

        $page= $request->query->getInt('page', 1);

       // $categories =$em->getRepository('WebBundle:Categories')->getCategorieAdmin($search);
        $categories =$em->getRepository('WebBundle:Categories')->getCategorieAdminAll($search);

      /*  $paginator = $this->get('knp_paginator');
        $categories_paginator = $paginator->paginate(
            $categories, $page, 10
        //Produits::NUM_ITEMS
        );
        $categories_paginator->setUsedRoute('categorie_admin_index_paginated');*/
        $paginator = $this->get('knp_paginator');

        $categories_paginator = $paginator->paginate(
            $categories, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10/*limit per page*/
        );

        return $this->render('@Backend/admin/categorie/index.html.twig', [
            'categories' => $categories_paginator,
            'search' => $search,
            'nbcategories' => $categories,
            'page' => $page,


        ]);
    }

    /**
     * @Route("/new", name="categorie_admin_new", methods={"GET","POST"})
     */
    public function newAction(Request $request)
    {
        $formOptions = array('pays' => null);

        $categorie = new Categories();
        $form = $this->createForm(CategorieType::class, $categorie,$formOptions);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $nomEn=  $form->get('nom_en')->getData();
            $nomFR=  $form->get('nom')->getData();
            if (!$nomFR){
                return $this->render('@Backend/admin/categorie/new.html.twig', [
                    'categorie' => $categorie,
                    'form' => $form->createView(),
                    'error' => "2",
                ]);
            }
            if (!$nomEn){
                return $this->render('@Backend/admin/categorie/new.html.twig', [
                    'categorie' => $categorie,
                    'form' => $form->createView(),
                    'error' => "2",
                ]);
            }

            $categoEn =$entityManager->getRepository('WebBundle:Categories')->findOneBy(array("nom_en"=>$nomEn,"pays"=>null));
            $categoFr =$entityManager->getRepository('WebBundle:Categories')->findOneBy(array("nom"=>$nomFR,"pays"=>null));

            if ($categoFr){

                return $this->render('@Backend/admin/categorie/new.html.twig', [
                    'categorie' => $categorie,
                    'form' => $form->createView(),
                    'error' => "1",
                ]);
            }elseif ($categoEn){


                return $this->render('@Backend/admin/categorie/new.html.twig', [
                    'categorie' => $categorie,
                    'form' => $form->createView(),
                    'error' => "1",
                ]);
            }
            $categorie->setPays(null);
           // $categorie->setPays($this->getUser()->getPays());
            $entityManager->persist($categorie);
            $entityManager->flush();
         /*   $referer =$request->request->get('referer');
            if($referer == "") return $this->redirectToRoute('categorie_admin_index');
            return $this->redirect($request->request->get('referer'));*/
            return $this->redirectToRoute('categorie_admin_index');
        }

        return $this->render('@Backend/admin/categorie/new.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}/{page}/edit", name="categorie_admin_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Categories $categorie,$page)
    {
        $startNameFR = $categorie->getNom() ;
        $startNameEN = $categorie->getNomEn() ;

        $referer =$request->request->get('referer');
        $formOptions = array('pays' => null);

        if($categorie->getPays() == null){
            $form = $this->createForm(CategorieType::class, $categorie,$formOptions);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();

                $nomEn=  $form->get('nom_en')->getData();
                $nomFR=  $form->get('nom')->getData();
                if (!$nomFR){
                    return $this->render('@Backend/admin/categorie/edit.html.twig', [
                        'categorie' => $categorie,
                        'form' => $form->createView(),
                        'error' => "2",
                    ]);
                }
                if (!$nomEn){
                    return $this->render('@Backend/admin/categorie/edit.html.twig', [
                        'categorie' => $categorie,
                        'form' => $form->createView(),
                        'error' => "2",
                    ]);
                }
                if ($startNameEN!=$nomEn){
                    $categoEn =$entityManager->getRepository('WebBundle:Categories')->findOneBy(array("nom_en"=>$nomEn,"pays"=>null));
                    if ($categoEn){


                        return $this->render('@Backend/admin/categorie/edit.html.twig', [
                            'categorie' => $categorie,
                            'form' => $form->createView(),
                            'error' => "1",
                        ]);
                    }
                }
                if ($startNameFR!=$nomFR){
                    $categoFr =$entityManager->getRepository('WebBundle:Categories')->findOneBy(array("nom"=>$nomFR,"pays"=>null));

                    if ($categoFr){

                        return $this->render('@Backend/admin/categorie/edit.html.twig', [
                            'categorie' => $categorie,
                            'form' => $form->createView(),
                            'error' => "1",
                        ]);
                    }
                }


                $this->getDoctrine()->getManager()->flush();

                /*if($referer == "") return $this->redirectToRoute('categorie_admin_index');
                return $this->redirect($request->request->get('referer'));*/
                return $this->redirectToRoute('categorie_admin_index',array('page'=>$page));

            }
            return $this->render('@Backend/admin/categorie/edit.html.twig', [
                'categorie' => $categorie,
                'form' => $form->createView(),
            ]);
        }
        else{
            if($referer == "") return $this->redirectToRoute('categorie_admin_index');
            return $this->redirect($request->request->get('referer'));
        }



    }


    /**
     * disable station.
     *
     * @Route("/{id}/{page}/disable", name="categorie_admin_disable", methods={"GET"})
     */
    public function disableAction(Categories $categorie,$page)
    {
      //  if($categorie->getPays() == $this->getUser()->getPays()){
        if($categorie->getPays() == null){
            $em = $this->getDoctrine()->getManager();
            $onecategorie =$em->getRepository('WebBundle:Categories')->find($categorie->getId());
            $onecategorie->setIsActive(!$onecategorie->getIsActive());
            $em->persist($onecategorie);
            $em->flush();
            return $this->redirectToRoute('categorie_admin_index',array('page'=>$page));
        }
        else{
            return $this->redirectToRoute('categorie_admin_index',array('page'=>$page));
        }
    }

    /**
     * delete station.
     *
     * @Route("/{id}/{page}/delete", name="categorie_admin_delete", methods={"GET"})
     */
    public function deleteAction(Categories $categorie,Request $request,$page)
    {
        //  if($categorie->getPays() == $this->getUser()->getPays()){
        if($categorie->getPays() == null){
            $em = $this->getDoctrine()->getManager();
            $onecategorie =$em->getRepository('WebBundle:Categories')->find($categorie->getId());
            //$onecategorie->setIsActive(false);
            $em->remove($onecategorie);
           // $em->persist($onecategorie);
            $em->flush();
            return $this->redirectToRoute('categorie_admin_index');
        }
        else{
            return $this->redirectToRoute('categorie_admin_index');
        }
    }
    /**
     * @Route("/Liste_des_categories", name="ExportCategorieAdmin" ,defaults={"_format"="xls","_filename"="Liste_des_categories"}, requirements={"_format"="csv|xls|xlsx"})
     * @Template("@Backend/excel/CategorieExcel.xlsx.twig")
     */
    public function ExportModeleAction($_filename, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        parse_str(parse_url($this->getRequest()->headers->get('referer'), PHP_URL_QUERY), $output);

        if(array_key_exists('search',$output)) $search=$output['search']; else $search='';

        //$categories =$em->getRepository('WebBundle:Categories')->getCategorieByPays($this->getUser()->getPays(),$search);
        $categories =$em->getRepository('WebBundle:Categories')->getCategorieAdmin($search);
      //  dump($categories);die();

        return $this->render('@Backend/excel/CategorieExcel.xlsx.twig', array(
            'Modeles' => $categories,
        ));
    }

}
