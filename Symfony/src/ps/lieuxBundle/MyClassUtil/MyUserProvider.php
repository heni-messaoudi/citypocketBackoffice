<?php

namespace ps\lieuxBundle\MyClassUtil;

use ps\lieuxBundle\CloudControlers\EtablissementModel;
use ps\lieuxBundle\EntitysControlers\user\User;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class MyUserProvider implements UserProviderInterface
{
    protected $request;
    protected $container;

    public function __construct(RequestStack $requestStack,Container $service_container)
    {
        $this->request = $requestStack->getCurrentRequest();
        $this->container = $service_container;
    }


    public function loadUserByUsername($username)
    {
        $user = new EtablissementModel($this->container);
        return $user->getUser($username,$this->request);
        
    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof User) {
            throw new BadCredentialsException(
                'veuillez vérifier votre email et votre mot de passe'
            );
        }
        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    {
        return User::class === $class;
    }
}