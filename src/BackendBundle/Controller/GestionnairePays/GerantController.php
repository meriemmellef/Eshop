<?php

namespace BackendBundle\Controller\GestionnairePays;


use BackendBundle\Form\GerantType;
use BackendBundle\Form\PaysType;
use BackendBundle\Utils\ExportExcelStyle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
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
 * @Route("/gerant")
 */
class GerantController extends Controller
{

    /**
     *
     * @Route("/", name="gerant_index")
     * @Method("GET")
     */
    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $email=$request->get('email',"");
        $message=$request->get('message',"");
        $page= $request->query->getInt('page', 1);

        $gerants =$em->getRepository('WebBundle:Utilisateurs')->getGerantByPays($this->getUser()->getPays()->getId(),$email);
        /*$paginator = $this->get('knp_paginator');
        $gerants_paginator = $paginator->paginate(
            $gerants, $page, 10
        //Produits::NUM_ITEMS
        );
    $gerants_paginator->setUsedRoute('gerant_index_paginated');

        */
        $paginator = $this->get('knp_paginator');

        $gerants_paginator = $paginator->paginate(
            $gerants, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10/*limit per page*/
        );

        return $this->render('@Backend/gestionnaire/gerant/index.html.twig', [
            'message' => $message,
            'email' => $email,
            'gerants' => $gerants_paginator,
            'nbgerants' => $gerants,
            'page' => $page,
        ]);

    }

    /**
     * @Route("/new", name="gerant_new", methods={"GET","POST"})
     */
    public function newAction(Request $request)
    {
        $errors=null;
        $formOptions = array('pays' => $this->getUser()->getPays());
        $gerant = new Utilisateurs();
        $form = $this->createForm(GerantType::class, $gerant,$formOptions);
       /* $form->add('plainPassword',RepeatedType::class,
        array('required'   => true,
            'type'=>'password',
            'error_bubbling' => true,
            'invalid_message' => 'Verifier votre mot de passe',
        ));*/

        $form ->add('plainPassword', RepeatedType::class, array(
            'type' => PasswordType::class,
            'invalid_message' => 'fos_user.password_mismatch.invalid',
            'options' => array('attr' => array('class' => 'password-field')),
            'required' => true,
            'first_options'  => array('label' => 'Password'),
            'second_options' => array('label' => 'Repeat Password'),
        ));
        $form->handleRequest($request);
        $validator = $this->get('validator');
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $gerant->setEnabled(true);
            $gerant->setRoles(array('ROLE_GERANT'));
            $gerant->setPays($this->getUser()->getPays());
            $entityManager->persist($gerant);
            $entityManager->flush();
          /*  $referer =$request->request->get('referer');
            if($referer == "") return $this->redirectToRoute('gerant_index');
            return $this->redirect($request->request->get('referer'));*/
           return $this->redirectToRoute('gerant_index',array('message' => "Gérant a été créé avec succès"));
        }
        $errors = $form->getErrors();

        return $this->render('@Backend/gestionnaire/gerant/new.html.twig', [
            'gerant' => $gerant,
            'form' => $form->createView(),
            'errors' => $this->getErrors($form, $form->getName())
        ]);
    }

    /**
     * @Route("/{id}/{page}/edit", name="gerant_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Utilisateurs $gerant,$page)
    {

        if($gerant->getPays() == $this->getUser()->getPays()) {
            $formOptions = array('pays' => $this->getUser()->getPays());
            $form = $this->createForm(GerantType::class, $gerant, $formOptions);
          /*  $form->add('plainPassword', RepeatedType::class,
                array('required' => false,
                    'type' => 'password',
                    'error_bubbling' => true,
                    'invalid_message' => 'Verifier votre mot de passe',
                ))*/

           $form ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
               'invalid_message' => 'fos_user.password_mismatch.invalid',
                'options' => array('attr' => array('class' => 'password-field')),
                'required' => true,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ));
            $form->handleRequest($request);
            $validator = $this->get('validator');
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();

                $PlainPassword =$form->get('plainPassword')->getData() ;
                // dump($PlainPassword);die();

                $gerant->setPlainPassword($PlainPassword);
                $password = $this->get('security.password_encoder')
                    ->encodePassword($gerant, $gerant->getPlainPassword());
                $gerant->setPassword($password);

                /*   if ($gerant->getPlainPassword()) {
                       $password = $this->get('security.password_encoder')->encodePassword($gerant, $gerant->getPlainPassword());
                       $gerant->setPassword($password);
                   }
                   $user = $entityManager->getRepository('WebBundle:Utilisateurs')->findOneBy(array('email' => $gerant->getEmail()));
                   $errors = $validator->validate($gerant);
                   if ($user && ($user->getId() != $gerant->getId())) {
                       $this->get('session')->getFlashBag()->add('emailexistant', 'email déja existe');
                       return $this->render('@Backend/gestionnaire/gerant/edit.html.twig', [
                           'gerant' => $gerant,
                           'form' => $form->createView(),
                           'errors' => $errors
                       ]);
                   }*/
                $gerant->setEnabled(true);
                $gerant->setRoles(array('ROLE_GERANT'));
                $gerant->setPays($this->getUser()->getPays());

                $entityManager->merge($gerant);
                $entityManager->flush();
               /* $referer = $request->request->get('referer');
                if ($referer == "") return $this->redirectToRoute('gerant_index');
                return $this->redirect($request->request->get('referer'));*/
                return $this->redirectToRoute('gerant_index',array('message' => "Gérant a été modifié avec succès",'page'=>$page));
            }
            // $errors = $form->getErrors();

            return $this->render('@Backend/gestionnaire/gerant/edit.html.twig', [
                'gerant' => $gerant,
                'form' => $form->createView(),
                'errors' => $this->getErrors($form, $form->getName())
            ]);
        }
        else{
          /*  $referer = $request->request->get('referer');
            if ($referer == "") return $this->redirectToRoute('gerant_index');
            return $this->redirect($request->request->get('referer'));*/
            return $this->redirectToRoute('gerant_index',array('page'=>$page));
        }


    }

    /**
     * @param \Symfony\Component\Form\Form $baseForm
     * @param \Symfony\Component\Form\Form $baseFormName
     *
     * @return array $errors
     */
    private function getErrors($baseForm, $baseFormName) {
        $errors = array();
        if ($baseForm instanceof \Symfony\Component\Form\Form) {
            foreach($baseForm->getErrors() as $error) {
                $errors[] = $error->getMessage();
            }

            foreach ($baseForm->all() as $key => $child) {
                if(($child instanceof \Symfony\Component\Form\Form)) {
                    $cErrors = $this->getErrors($child, $baseFormName . "_" . $child->getName());
                    $errors = array_merge($errors, $cErrors);
                }
            }
        }
        return $errors;
    }
    /**
     * disable user.
     *
     * @Route("/{id}/{page}/disable", name="gerant_disable", methods={"GET"})
     */
    public function disableAction(Utilisateurs $user,$page)
    {
            $em = $this->getDoctrine()->getManager();
            $oneUser=$em->getRepository('WebBundle:Utilisateurs')->find($user->getId());
            if($oneUser && ($oneUser->getPays() == $this->getUser()->getPays())){
                $oneUser->setEnabled(false);
                $em->persist($oneUser);
                $em->flush();
                return $this->redirectToRoute('gerant_index',array('page'=>$page));
            }
            else{
                return $this->redirectToRoute('gerant_index',array('page'=>$page));
            }
    }


    /**
     * @Route("/Liste_des_gerants", name="ExportGerant" ,defaults={"_format"="xls","_filename"="Liste_des_gerants"}, requirements={"_format"="csv|xls|xlsx"})
     * @Template("@Backend/excel/GerantExcel.xlsx.twig")
     */
    public function ExportModeleAction($_filename, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        parse_str(parse_url($this->getRequest()->headers->get('referer'), PHP_URL_QUERY), $output);

        if(array_key_exists('email',$output)) $email=$output['email']; else $email='';
        $gerants =$em->getRepository('WebBundle:Utilisateurs')->getGerantByPays($this->getUser()->getPays()->getId(),$email);
        return $this->render('@Backend/excel/GerantExcel.xlsx.twig', array(
            'Modeles' => $gerants,
        ));
    }
}
