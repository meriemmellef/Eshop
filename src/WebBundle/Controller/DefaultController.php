<?php

namespace WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('WebBundle:Default:index.html.twig');
    }
    /**
     * @Route("/error403")
     */
    public function error403Action()
    {
        return $this->redirectToRoute('logout');
    }
}
