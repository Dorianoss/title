<?php

namespace App\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\KernelEvents;

class RequestListener implements EventSubscriberInterface
{
    /**
     * Performs the validation.
     * @param GetResponseEvent $event
     */
    public function onKernelRequest(GetResponseEvent $event)
    {
//        $request = $event->getRequest();
//        if (strpos($request->getRequestUri(), '/api') !== false)
//        {
//            if ($request->query->get('auth') !== '1243543')
//            {
//               Throw new AccessDeniedHttpException('This path is secured!');
//
//            }
//        }
    }
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            KernelEvents::REQUEST => array(
                array('onKernelRequest', 256),
            ),
        );
    }
}