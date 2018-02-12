<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 21/01/18
 * Time: 21:38
 */

namespace App\EventListener;


use JavierEguiluz\Bundle\EasyAdminBundle\Event\EasyAdminEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class AppSubscriber implements EventSubscriberInterface
{

    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value can be:
     *
     *  * The method name to call (priority defaults to 0)
     *  * An array composed of the method name to call and the priority
     *  * An array of arrays composed of the method names to call and respective
     *    priorities, or 0 if unset
     *
     * For instance:
     *
     *  * array('eventName' => 'methodName')
     *  * array('eventName' => array('methodName', $priority))
     *  * array('eventName' => array(array('methodName1', $priority), array('methodName2')))
     *
     * @return array The event names to listen to
     */
    public static function getSubscribedEvents()
    {
        return array();

    }

    public function checkUserRights(GenericEvent $event){

        // if super admin, allow all
           $authorization = $this->container->get('security.authorization_checker');
           $request = $this->container->get('request_stack')->getCurrentRequest()->query;


        if ($authorization->isGranted('ROLE_ADMIN')) {

            return;
        }

        $entity = $request->get('entity');
        $action = $request->get('action');
        $user_id = $request->get('id');
        if ($entity == 'User') {

            if ($action == 'edit' || $action == 'show') {

                if ($user_id == $this->container->get('security.token_storage')->getToken()->getUser()->getId()) {
                    return;
                }
            }
        }
        $config = $this->container->get('easyadmin.config.manager')->getBackendConfig();
        foreach ($config['entities'] as $k => $v) {
            if ($entity == $k && !$authorization->isGranted($v[$action]['role'])) {
                throw new AccessDeniedException();
            }
        }
    }
}