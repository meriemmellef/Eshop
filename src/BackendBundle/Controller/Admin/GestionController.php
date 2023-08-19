<?php

namespace BackendBundle\Controller\Admin;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use WebBundle\Entity\Produits;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @Route("/admin")
 *
 */
class GestionController extends Controller {

    /**
     * @Route("/", name="admin_index")
     * @Method("GET")
     */
    public function homePageAction() {
        return $this->render('BackendBundle:Default:index.html.twig');
    }

    /**
     * Lists all Produits entities.
     *
     * @Route("/produit", name="admin_post_index", defaults={"page": 1})
     * @Route("/produit/page/{page}", requirements={"page": "[1-9]\d*"}, name="admin_post_index_paginated")
     * @Method("GET")
     */
    public function indexAction($page) {

        $query = $this->getDoctrine()->getRepository('WebBundle:Produits')->queryBProduits();

        $paginator = $this->get('knp_paginator');
        $posts = $paginator->paginate(
                $query, $page, 3
                //Produits::NUM_ITEMS
        );

        $posts->setUsedRoute('admin_post_index_paginated');


        return $this->render('BackendBundle:Admin/produit:index.html.twig', array('posts' => $posts));
    }

    /**
     * Creates a new Produits entity.
     *
     * @Route("/produit/new", name="admin_post_new")
     * @Method({"GET", "POST"})
     *
     */
    public function newAction(Request $request) {
        $product = new Produits();

        $form = $this->createForm('BackendBundle\Form\ProduitType', $product)
                ->add('saveAndCreateNew', 'Symfony\Component\Form\Extension\Core\Type\SubmitType');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $file = $product->getImage();

            if ($file != NULL) {

                $fileName = md5(uniqid()) . '.' . 'png';

                $file->move(
                        $this->getParameter('image_directory'), $fileName
                );

                $product->setImage($fileName);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            // See http://symfony.com/doc/current/book/controller.html#flash-messages
            $this->addFlash('success', 'Le produit crée avec succes');

            if ($form->get('saveAndCreateNew')->isClicked()) {
                return $this->redirectToRoute('admin_post_new');
            }

            return $this->redirectToRoute('admin_post_index');
        }

        return $this->render('BackendBundle:Admin/produit:new.html.twig', array(
                    'post' => $product,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Produits entity.
     *
     * @Route("/produit/{id}", requirements={"id": "\d+"}, name="admin_post_show")
     * @Method("GET")
     */
    public function showAction(Produits $produit) {

        $deleteForm = $this->createDeleteForm($produit);

        return $this->render('BackendBundle:Admin/produit:show.html.twig', array(
                    'post' => $produit,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Produits entity.
     *
     * @Route("/produit/{id}/edit", requirements={"id": "\d+"}, name="admin_post_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Produits $product, Request $request) {

        $entityManager = $this->getDoctrine()->getManager();

        $editForm = $this->createForm('BackendBundle\Form\ProduitType', $product);
        $deleteForm = $this->createDeleteForm($product);

        $tmp_image = $product->getImage();

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $file = $product->getImage();

            if (is_null($file)) {
                $product->setImage($tmp_image);
            } else {

                $fileName = md5(uniqid()) . '.' . 'png';

                $file->move(
                        $this->getParameter('image_directory'), $fileName
                );

                $product->setImage($fileName);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Le produit a été mis a jour avec succes');

            return $this->redirectToRoute('admin_post_edit', array('id' => $product->getId()));
        }

        return $this->render('BackendBundle:Admin/produit:edit.html.twig', array(
                    'post' => $product,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Produits entity.
     *
     * @Route("/produit/delete/{id}", name="admin_post_delete")
     *
     */
    public function deleteAction(Request $request, Produits $post) {
        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->remove($post);
        $entityManager->flush();

        $this->addFlash('success', 'Produit efface avec succes');

        return $this->redirectToRoute('admin_post_index');
    }

    /**
     * HTTP DELETE method.

     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Produits $post) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('admin_post_delete', array('id' => $post->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

    /**
     * @Route("/update-affactation", name="update_affectation", options={"expose"=true}, requirements={"id": "\d+"})
     */
    public function updateAffectationAction(Request $request) {
        
        $id = $request->query->get('id');

        $data = $request->query->get('data', array());
        
        $data_unchecked = $request->query->get('data_unchecked', array());
        
        $em = $this->getDoctrine()->getManager();

        $q = $em->createQuery('update WebBundle:Delegation d set d.grossiste_id = null where d.grossiste_id  = :user_id')->setParameter('user_id', $id);
        $numUpdated = $q->execute();
        
        $result = array_unique(array_merge($data, $data_unchecked));

        $batchSize = count($result);
        $i = 0;
        $q = $em->createQuery('select d from WebBundle:Delegation d where d.id in (:ids)')->setParameter('ids', $result);
        $iterableResult = $q->iterate();
        foreach ($iterableResult as $row) {
            $user = $row[0];
            $user->setGrossisteId($id);
            if (($i % $batchSize) === 0) {
                $em->flush(); // Executes all updates.
                $em->clear(); // Detaches all objects from Doctrine!
            }
            ++$i;
        }
        $em->flush();                
        
        echo 'OK';
        die('');
    }

}
