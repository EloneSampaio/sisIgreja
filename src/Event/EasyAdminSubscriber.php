<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 21/01/18
 * Time: 01:41
 */

namespace App\Event;


use App\Entity\User;
use JavierEguiluz\Bundle\EasyAdminBundle\Event\EasyAdminEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class EasyAdminSubscriber implements EventSubscriberInterface
{
    private $authorizationChecker;

    /**
     * EasyAdminSubscriber constructor.
     * @param $authorizationChecker
     */
    public function __construct(TokenStorageInterface $tokenStorage, AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->authorizationChecker = $authorizationChecker;
    }


    public static function getSubscribedEvents()
    {
       return [EasyAdminEvents::PRE_EDIT=> 'onPreEdit'];
    }

    public function onPreEdit(GenericEvent  $event){

        $config=$event->getSubject();

        if ($config['class'] == User::class) {
            $this->denyAccessUnlessSuperAdmin();
        }

    }

    public function denyAccessUnlessSuperAdmin(){

        if (!$this->authorizationChecker->isGranted('ROLE_SUPER_ADMIN')) {
            throw new AccessDeniedException('Unable to access this page!');
        }
    }




}