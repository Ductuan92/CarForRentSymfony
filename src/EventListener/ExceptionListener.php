<?php

namespace App\EventListener;

use App\Traits\ResponseTraits;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class ExceptionListener
{
    use ResponseTraits;

    public function onKernelException(ExceptionEvent $event)
    {
        // You get the exception object from the received event
        $exception = $event->getThrowable();
//        $message = sprintf(
//            'My Error says: %s with code: %s',
//            $exception->getMessage(),
//            $exception->getCode()
//        );
        $response = new Response();
//        $response->setContent($message);


        if ($exception instanceof HttpExceptionInterface) {
            $response->setStatusCode($exception->getStatusCode());
            $response->headers->replace($exception->getHeaders());
//        } elseif {
//            $response->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
        } else {
            $response = $this->error([$exception->getMessage()], $exception->getCode());
        }
        $event->setResponse($response);
    }
}
