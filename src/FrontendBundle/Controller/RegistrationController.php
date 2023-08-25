<?php
// src/AppBundle/Controller/RegistrationController.php

namespace FrontendBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\RegistrationController as BaseRegistrationController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;

class RegistrationController extends BaseRegistrationController
{

    public function registerAction()
    {


        $form = $this->container->get('fos_user.registration.form');
        $entityManager = $this->container->get('doctrine')->getManager();
         $formHandler = $this->container->get('fos_user.registration.form.handler');
         $confirmationEnabled = $this->container->getParameter('fos_user.registration.confirmation.enabled');

         if($this->container->get('request_stack')->getCurrentRequest()->isMethod('POST')){

        /*     $process = $formHandler->process($confirmationEnabled);
             $user = $form->getData();

             if($process){
                 $authUser = false;
                 if ($confirmationEnabled) {

                     $this->container->get('session')->set('fos_user_send_confirmation_email/email', $user->getEmail());
                     $route = 'fos_user_registration_check_email';
                 } else {
                     $authUser = true;
                     $route = 'fos_user_registration_confirmed';
                 }

                 $this->setFlash('fos_user_success', 'registration.flash.user_created');
                 $url = $this->container->get('router')->generate($route);
                 $response = new RedirectResponse($url);

                 if ($authUser) {
                     $this->authenticateUser($user, $response);
                 }
                 return $response;
             }*/
             /*    $process = $formHandler->process($confirmationEnabled);
            $user = $form->getData();



            if($process){

                $authUser = false;
                if ($confirmationEnabled) {

                    $this->container->get('session')->set('fos_user_send_confirmation_email/email', $user->getEmail());
                    $route = 'fos_user_registration_check_email';
                } else {
                    $authUser = true;
                    $route = 'fos_user_registration_confirmed';
                }

                $this->setFlash('fos_user_success', 'registration.flash.user_created');
                $url = $this->container->get('router')->generate($route);
                $response = new RedirectResponse($url);

                if ($authUser) {
                    $this->authenticateUser($user, $response);
                }
                return $response;
            }*/

     /*   if ($this->container->get('request_stack')->getCurrentRequest()->request->has('g-recaptcha-response')) {
            $g_response = $this->container->get('request_stack')->getCurrentRequest()->request->get('g-recaptcha-response');
            $resp = $this->verifyRecaptcha($g_response);
            //
            if (!$resp) {
                $this->container->get('session')->getFlashBag()->add('register', 'captcha login or password incorrect');
              // $this->container->get('session')->set('register', "captcha login or password incorrect");
               return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:register.html.' . $this->getEngine(), array(
                    'form' => $form->createView()

                ));
            } else {*/


                $process = $formHandler->process($confirmationEnabled);
                $user = $form->getData();

              /*  $role = array('ROLE_CLIENT');
                $user->setRoles($role);*/


                if ($process) {

                    $authUser = false;
                    if ($confirmationEnabled) {

                        $this->container->get('session')->set('fos_user_send_confirmation_email/email', $user->getEmail());
                        $route = 'fos_user_registration_check_email';
                    } else {
                        $authUser = true;
                        $route = 'fos_user_registration_confirmed';
                    }

                    $this->setFlash('fos_user_success', 'registration.flash.user_created');
                    $url = $this->container->get('router')->generate($route);
                    $response = new RedirectResponse($url);

                    if ($authUser) {
                      $session = $this->container->get('session');

                        $role = array('ROLE_CLIENT');
                        $pays =$session->get("pays");
                        $station_id =$session->get("station_id");
                        $station =$entityManager->getRepository('WebBundle:Station')->find($station_id);
                        $country = $entityManager->getRepository('WebBundle:Pays')->find($pays->getId());


                        // $station = ;
                        $user->setPays($country);
                        $user->setStation($station);
                        $user->setRoles($role);
                        $entityManager->persist($user);
                        $entityManager->flush();
                       /* $entityManager->merge($user);
                        $entityManager->flush();*/
                        /////
                      $this->authenticateUser($user, $response);
                    }
                    return $response;
                }


           /* }
        } else {
            $this->container->get('session')->getFlashBag()->add('error', "captcha login or password incorrect");

          // $this->container->get('session')->set('register', "captcha login or password incorrect");
            return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:register.html.' . $this->getEngine(), array(
                'form' => $form->createView()
            ));
        }*/
    }

         return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:register.html.'.$this->getEngine(), array(
        'form' => $form->createView(),
    ));


}


    private function verifyRecaptcha($recaptchaResponse)
    {
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, array("secret"=>"6LedckodAAAAAA270Y19aTXUpHaNHzxW4LjmaNm5","response"=>$recaptchaResponse));
        $response = curl_exec($ch);
        curl_close($ch);
        // $data = json_decode($response);
        $result = json_decode($response, true);

        return !empty($result['success']);
    }
    /**
     * Tell the user his account is now confirmed
     */
    public function confirmedAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return $this->container->get('templating')->renderResponse('FrontendBundle:Profile:compte.html.'.$this->getEngine(), array(
            'user' => $user,
        ));
    }


}
