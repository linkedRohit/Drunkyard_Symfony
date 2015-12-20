<?php

namespace Social\DrunkenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SocialDrunkenBundle:Default:index.html.twig');
    }
}
