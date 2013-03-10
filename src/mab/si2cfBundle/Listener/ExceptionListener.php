<?php

namespace mab\si2cfBundle\Listener;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

class ExceptionListener
{
    protected $templating;
	protected $kernel;

	public function __construct(EngineInterface $templating, $kernel)
	{
    	$this->templating = $templating;
    	$this->kernel = $kernel;
	}

    public function onKernelException(GetResponseForExceptionEvent $event)
	{
    	// exception object
    	$exception = $event->getException();

    	// new Response object
    	$response = new Response();

        if($exception->getStatusCode() == 404)
        {
            $response->setContent(
        	    $this->templating->render(
                	'mabsi2cfBundle:Exception:error404.html.twig',
                	array('exception' => $exception)
            	)
        	);
        	// set the new $response object to the $event
        	$event->setResponse($response);
        } else if ('prod' == $this->kernel->getEnvironment()) {
            $response->setContent(
        	    $this->templating->render(
                	'mabsi2cfBundle:Exception:exception.html.twig',
                	array('exception' => $exception)
            	)
        	);

        	// HttpExceptionInterface is a special type of exception
        	// that holds status code and header details
        	if ($exception instanceof HttpExceptionInterface) {
            	$response->setStatusCode($exception->getStatusCode());
            	$response->headers->replace($exception->getHeaders());
        	} else {
        	    $response->setStatusCode(500);
        	}

        	// set the new $response object to the $event
        	$event->setResponse($response);
    	}
    }
}