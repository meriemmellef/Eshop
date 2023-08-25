<?php

namespace WebBundle\Services;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class AfterLoginRedirection implements AuthenticationSuccessHandlerInterface {

  /**
   * This is called when an interactive authentication attempt succeeds. This
   * is called by authentication listeners inheriting from
   * AbstractAuthenticationListener.
   *
   * @return Response never null
   */
  private $router;

  /**
   * AfterLoginRedirection constructor.
   *
   * @param RouterInterface $router
   */
  public function __construct(RouterInterface $router) {
    $this->router = $router;
  }

  /**
   * @param Request        $request
   *
   * @param TokenInterface $token
   *
   * @return RedirectResponse
   */
  public function onAuthenticationSuccess(Request $request, TokenInterface $token) {

    $roles = $token->getRoles();
   // dump($token);die;
    $rolesTab = array_map(function ($role) {
      return $role->getRole();
    }, $roles);

    if (in_array('ROLE_CLIENT', $rolesTab, true)) {

      $requestedUrl = new RedirectResponse($this->router->generate('homepage_frontend'));
    }
  
    return $requestedUrl;
  }

}
