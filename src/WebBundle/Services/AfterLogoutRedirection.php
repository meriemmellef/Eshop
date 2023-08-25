<?php

/**
 * Created by PhpStorm.
 * User: Meryem
 * Date: 15/08/2018
 * Time: 13:17
 */

namespace WebBundle\Services;

use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Routing\Router;

class AfterLogoutRedirection implements LogoutSuccessHandlerInterface {

  protected $router;

  public function __construct(Router $router) {
    $this->router = $router;
  }

  public function onLogoutSuccess(Request $request) {


    $redirection = new RedirectResponse($this->router->generate('homepage_frontend'));

    return $redirection;
  }

}
