<?php

namespace WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BaseController extends Controller
{

    private $em = null;

    public function initEntityManager()
    {
        if(is_null($this->em))
            $this->em =  $this->getDoctrine()->getManager();
    }


}
