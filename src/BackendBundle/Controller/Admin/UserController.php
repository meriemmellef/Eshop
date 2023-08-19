<?php

namespace BackendBundle\Controller\Admin;

use BackendBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use WebBundle\Entity\Utilisateurs;

/**
 * @Route("/user")
 */
class UserController extends Controller
{
    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(Request $request )
    {
        $email=$request->get('email',"");
        $em = $this->getDoctrine()->getManager();
        $users =$em->getRepository('WebBundle:Utilisateurs')->findAllGestionnaire($email);
        return $this->render('@Backend/admin/user/index.html.twig', [
            'users' => $users,
            'email' => $request->get('email'),
            'role' => $request->get('role'),
        ]);
    }

    /**
     * @Route("/new", name="user_new", methods={"GET","POST"})
     */
    public function newAction(Request $request)
    {
        $user = new Utilisateurs();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $validator = $this->get('validator');

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            ///
         /*   $userf=$entityManager->getRepository('WebBundle:Utilisateurs')->findOneBy(array('email'=>$user->getEmail()));
            $errors = $validator->validate($user);

            if($userf){
                $this->get('session')->getFlashBag()->add('emailexistant', 'email déja existe');
                return $this->render('@Backend/gestionnaire/gerant/new.html.twig', [
                    'user' => $user,
                    'form' => $form->createView(),
                    'errors' => $errors

                ]);
            }*/
            ///

            $user->setEnabled(true);
            $user->setRoles(array('ROLE_GESTIONNAIRE'));
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('@Backend/admin/user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),

        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Utilisateurs $user)
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $entityManager = $this->getDoctrine()->getManager();

            $PlainPassword =$form->get('plainPassword')->getData() ;
           // dump($PlainPassword);die();

            $user->setPlainPassword($PlainPassword);
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
////////////////////////////////////////

            $user->setEnabled(true);
            $user->setRoles(array('ROLE_GESTIONNAIRE'));
            $entityManager->merge($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('@Backend/admin/user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * enable user.
     *
     * @Route("/{id}/enable", name="utilisateurs_enable", methods={"GET"})
     */
    public function enableAction(Utilisateurs $user)
    {
        $em = $this->getDoctrine()->getManager();
        $oneUser =$em->getRepository('WebBundle:Utilisateurs')->find($user->getId());


        $oneUser->setEnabled(true);
        $em->persist($oneUser);
        $em->flush();
        return $this->redirectToRoute('user_index');
    }

    /**
     * disable user.
     *
     * @Route("/{id}/disable", name="utilisateurs_disable", methods={"GET"})
     */
    public function disableAction(Utilisateurs $user)
    {
        $em = $this->getDoctrine()->getManager();
        $oneUser=$em->getRepository('WebBundle:Utilisateurs')->find($user->getId());
        $oneUser->setEnabled(false);
        $em->persist($oneUser);
        $em->flush();
        return $this->redirectToRoute('user_index');
    }
}
