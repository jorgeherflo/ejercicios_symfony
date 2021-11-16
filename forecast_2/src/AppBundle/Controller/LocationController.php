<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LocationController extends Controller 
{

    public function indexAction() {
        $this->addFlash('location', 'You are located in Oviedo, Spain');

        return $this->render('location/index.html.twig');
    }

    public function indexJsonAction() {
        $response = new Response(json_encode(array('location' => 'You are located in Valladolid, Spain')));

        // Para que no descargue el json ponemos text/json, true en vez de aplication/json solo.
        $response->headers->set('Content-type', 'text/json', true);

        return $response;
    }

}
