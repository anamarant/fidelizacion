<?php

namespace Elkanogroup\ProductosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProductosBundle:Default:index.html.twig', array('name' => $name));
    }
}
