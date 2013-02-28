<?php

namespace mab\si2cfBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('mabsi2cfBundle:Default:index.html.twig', array('name' => $name));
    }
}
