<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 12/02/18
 * Time: 20:03
 */

namespace App\Event;


use Symfony\Component\EventDispatcher\Event;
use Xiidea\EasyAuditBundle\Resolver\EventResolverInterface;

class CustomEventResolver implements EventResolverInterface
{

    /**
     * @param Event $event
     * @param string $eventName
     * @return mixed
     */
    public function getEventLogInfo(Event $event, $eventName)
    {
        return array(
            'description'=>'Login feito',
            'type'=>$eventName
        );
    }
}