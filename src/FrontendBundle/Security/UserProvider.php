<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FrontendBundle\Controller\Security;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface as SecurityUserInterface;
use FOS\UserBundle\Model\User;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use FOS\UserBundle\Propel\User as PropelUser;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpKernel\KernelEvents;
class UserProvider implements UserProviderInterface
{
    /**
     * @var UserManagerInterface
     */
    protected $userManager;

    /**
     * Constructor.
     *
     * @param UserManagerInterface $userManager
     */

    /**
     * @var Session
     */
    private $session;

    private $request_stack;

    private $private_key;

    private $dispatcher;

    private $tokenStorage;
    public function __construct(UserManagerInterface $userManager,Session $session, RequestStack $request_stack, EventDispatcherInterface $dispatcher, TokenStorageInterface $tokenStorage, UrlGeneratorInterface $router)
    {
        $this->userManager = $userManager;
        $this->session = $session;
        $this->request_stack = $request_stack;
        $this->dispatcher = $dispatcher;
        $this->tokenStorage = $tokenStorage;
        $this->router = $router;
    }

    /**
     * {@inheritDoc}
     */
    public function loadUserByUsername($username)
    {
        if ($this->request_stack->getCurrentRequest()->request->has('g-recaptcha-response')) {
            $g_response = $this->request_stack->getCurrentRequest()->request->get('g-recaptcha-response');


            $resp = $this->verifyRecaptcha($g_response);

            if (!$resp ) {
                $this->session->getFlashBag()->set('danger', " captcha login or password incorrect");
                $this->tokenStorage->setToken(null);
                $this->dispatcher->addListener(KernelEvents::RESPONSE, array($this, 'onKernelResponse'));
                throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $username));
            }


        } else {
            $this->session->getFlashBag()->set('danger', "captcha login or password incorrect");
            $this->tokenStorage->setToken(null);
            $this->dispatcher->addListener(KernelEvents::RESPONSE, array($this, 'onKernelResponse'));
            throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $username));


        }
        $user = $this->findUser($username);

        if (!$user) {
            throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $username));
        }

        return $user;
    }

    /**
     * {@inheritDoc}
     */
    public function refreshUser(SecurityUserInterface $user)
    {
        if (!$user instanceof User && !$user instanceof PropelUser) {
            throw new UnsupportedUserException(sprintf('Expected an instance of FOS\UserBundle\Model\User, but got "%s".', get_class($user)));
        }

        if (null === $reloadedUser = $this->userManager->findUserBy(array('id' => $user->getId()))) {
            throw new UsernameNotFoundException(sprintf('User with ID "%d" could not be reloaded.', $user->getId()));
        }

        return $reloadedUser;
    }

    /**
     * {@inheritDoc}
     */
    public function supportsClass($class)
    {
        $userClass = $this->userManager->getClass();

        return $userClass === $class || is_subclass_of($class, $userClass);
    }

    /**
     * Finds a user by username.
     *
     * This method is meant to be an extension point for child classes.
     *
     * @param string $username
     *
     * @return UserInterface|null
     */
    protected function findUser($username)
    {
        return $this->userManager->findUserByUsername($username);
    }
    public function onKernelResponse(FilterResponseEvent $event)
    {
        $response = new RedirectResponse($this->router->generate('fos_user_security_login'));
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
