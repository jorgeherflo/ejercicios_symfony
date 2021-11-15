<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ForecastController extends Controller {

    public function indexAction() {
        return new Response('It\'s freezing cold');
    }
    
    public function indexParamAction($weather) {
        return new Response('<html><body><h1>Weather info : It\'s : ' . $weather . '</h1></body></html>');
    }

    public function index2ParamsAction($weather, $temperature) {
        return new Response('<html><body><h1>Weather info : It\'s : ' . $weather . '</h1><h1> And the current temperature is: ' . $temperature .'</body></html>');
    }

    public function indexRequestAction ($weather,$temperature, Request $request) {
        return new Response('<html><body><h1>Weather info in :'
                            . $request->query->get("city")
                            . '. It\'s ' . $weather . ' and the current temperature is: '
                            . $temperature . ' ºC <h1></body></html>');
    }
}
