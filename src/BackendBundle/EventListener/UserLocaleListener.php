<?php

namespace BackendBundle\EventListener;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Stores the locale of the user in the session after the
 * login. This can be used by the LocaleListener afterwards.
 */
class UserLocaleListener
{
    /**
     * @var Session
     */
    private $session;

    private $request_stack;

    private $private_key;

    private $dispatcher;

    private $tokenStorage;

    public function __construct(Session $session, RequestStack $request_stack, EventDispatcherInterface $dispatcher, TokenStorageInterface $tokenStorage, UrlGeneratorInterface $router)
    {
        $this->session = $session;
        $this->request_stack = $request_stack;
        $this->dispatcher = $dispatcher;
        $this->tokenStorage = $tokenStorage;
        $this->router = $router;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
     //   if ($this->request_stack->getCurrentRequest()->request->has('g-recaptcha-response') and true) {
        if ($this->request_stack->getCurrentRequest()->request->has('g-recaptcha-response') ) {

            $g_response = $this->request_stack->getCurrentRequest()->request->get('g-recaptcha-response');


            $resp = $this->verifyRecaptcha($g_response);

           // if (!$resp and false) {
            if (!$resp ) {

                $this->session->getFlashBag()->set('danger', "captcha login or password incorrect");
                $this->tokenStorage->setToken(null);
                $this->dispatcher->addListener(KernelEvents::RESPONSE, array($this, 'onKernelResponse'));
            }
        } else {
            $this->session->getFlashBag()->set('danger', " captcha login or password incorrect");
            $this->tokenStorage->setToken(null);
            $this->dispatcher->addListener(KernelEvents::RESPONSE, array($this, 'onKernelResponse'));
        }
    }

    public function onKernelResponse(FilterResponseEvent $event)
    {
        $route = $this->request_stack->getCurrentRequest()->request->get('route');
        if($route == 0) $response = new RedirectResponse($this->router->generate('admin_login'));
        else  if($route == 1) $response = new RedirectResponse($this->router->generate('fos_user_security_login'));
        else  if($route == 2) $response = new RedirectResponse($this->router->generate('fos_user_registration_register'));

        $event->setResponse($response);
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
}

?>
