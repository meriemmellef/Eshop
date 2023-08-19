<?php

namespace BackendBundle\Controller;

use FOS\UserBundle\Controller\SecurityController as BaseController;
use WebBundle\Entity\Utilisateurs;

/**
 * {@inheritDoc}
 */
class SecurityController extends BaseController
{

    /**
     * {@inheritDoc}
     */
    public function renderLogin(array $data)
    {
        $requestAttributes = $this->container->get('request')->attributes;
        $authChecker = $this->container->get('security.authorization_checker');


     /*if ('admin_login' === $requestAttributes->get('_route')) {



      if ($authChecker->isGranted('ROLE_SUPER_ADMIN')) {

                $template = sprintf('BackendBundle:admin:pays:index.html.twig');
                return $this->container->get('templating')->render('@Backend/admin/pays/index.html.twig', $data);

            }
            elseif ($authChecker->isGranted('ROLE_GESTIONNAIRE')){

                $template = sprintf('BackendBundle:gestionnaire:dashboard:index.html.twig');
                //rahma add this because the old return it doesn t work for me
               return $this->container->get('templating')->render('@Backend/gestionnaire/dashboard/index.html.twig', $data);

            }
            elseif ($authChecker->isGranted('ROLE_GERANT')) {

                return $this->container->get('templating')->render('@Backend/gerant/dashboard/index.html.twig', $data);

            }else {
                $session = $this->container->get('session');

                $PreferredLanguage =  $_SERVER['HTTP_ACCEPT_LANGUAGE'];
                $pos = strpos($PreferredLanguage, "en");

                if ($pos === false){
                    //  $this->session->set('_locale', "fr");
                    $session->set('_locale', "fr");
                }else{
                    $session->set('_locale', "en");
                  //  $this->get('session')->set('_locale', "en");
                }
              //  $template = sprintf('BackendBundle:Security:login.html.twig');
                $template = sprintf('FOSUserBundle:Security:login.html.twig');
            }
        }else {
         $session = $this->container->get('session');

         $PreferredLanguage =  $_SERVER['HTTP_ACCEPT_LANGUAGE'];
         $pos = strpos($PreferredLanguage, "en");

         if ($pos === false){
             //  $this->session->set('_locale', "fr");
             $session->set('_locale', "fr");
         }else{
             $session->set('_locale', "en");
             //  $this->get('session')->set('_locale', "en");
         }
         //dump($requestAttributes->get('_route'));die();
          //  $template = sprintf('FOSUserBundle:Security:login.html.twig');

         $template = sprintf('BackendBundle:Security:login.html.twig');

     }*/
        $session = $this->container->get('session');

        $PreferredLanguage =  $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        $pos = strpos($PreferredLanguage, "en");

        if ($pos === false){
            //  $this->session->set('_locale', "fr");
            $session->set('_locale', "fr");
        }else{
            $session->set('_locale', "en");
            //  $this->get('session')->set('_locale', "en");
        }
        //dump($requestAttributes->get('_route'));die();
        //  $template = sprintf('FOSUserBundle:Security:login.html.twig');

        $template = sprintf('BackendBundle:Security:login.html.twig');
      return $this->container->get('templating')->renderResponse($template, $data);
    }
    public function checkAction()
    {
        throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }

}
