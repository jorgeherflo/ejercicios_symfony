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

    public function checkAction(Request $request) {

        $session = $request->getSession();
        $log = $session->get("log", array());

        array_push($log, 'Temperatura tomada en : ' .
                     date('l jS \of F Y h:i:s A'));

        $session->set('log', $log);

        return new Response('Temperatura tomada y log persistente satisfactorio');

    }

    public function getAllAction( Request $request) {

        $session = $request->getSession();
        $log = $session->get("log",array());
        $result = 'LOG DE TEMPERATURAS <br>';


        foreach($log as $item) {
            $result .= $item . '<br/>';
        }

        return new Response($result);
    }

    

}
