<?php

namespace HVO\ConfigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('HVOConfigBundle:Default:index.html.twig', array('name' => $name));
    }
}
