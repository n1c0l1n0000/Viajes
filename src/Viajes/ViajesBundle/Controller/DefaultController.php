<?php

namespace Viajes\ViajesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('ViajesBundle:Default:index.html.twig', array('name' => $name));
    }
}
