<?php

namespace Elkanogroup\ProductosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('ProductosBundle:Default:index.html.twig', array('name' => $name));
    }

    public function createAction() {
        $producto = new Productos();
        $producto->setNombre("Gafas 1");
        $producto->setImagen("gafas.jpg");
        $producto->setPuntos("100");

        $em = $this->getDoctrine()->getManager();
        $em->persist($producto);
        $em->flush();

        return new Response('Nuevo producto creado con id' . $producto->getIdProducto());
    }

    public function showAction($id_producto) {
        $repository = $this->getDoctrine()->getRepository('ProductosBundle:Productos');
        $producto = $repository->find($id_producto);
        
        return $this->render('ProductosBundle:Productos:show.html.twig', array('producto' => $producto));
    }
    
    public function listAction() {
        $repository = $this->getDoctrine()->getRepository('ProductosBundle:Productos');
        $lista_productos = $repository->findAll();
        
        return $this->render('ProductosBundle:Productos:index.html.twig', array('lista_productos' => $lista_productos));
    }

}
