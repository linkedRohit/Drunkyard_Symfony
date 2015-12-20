<?php

namespace Social\DrunkenBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration as config;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\HttpFoundation\RedirectResponse;


/**
 * @config\Route("/auth")
 */
class AuthController extends Controller
{
	
    /**
     * @config\Route("/authenticate", name="api_auth_authenticate")
     */
    public function authenticateAction()
    {
        return new Response("Authenticated");
    }
}

