<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TemperatureController extends Controller 
{
    public function getAction($id) {
        if ( $id == null || $id != 1 ) {
            throw $this->createNotFoundException('El registro requerido no existe : $id ');
        } else {
            return new Response("Register " . $id );
        }
    }
}
