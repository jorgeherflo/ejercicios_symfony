<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CalcularController extends Controller
{

public function indexAction($number_1, $number_2) {

    $suma = $number_1 + $number_2;

    return new Response('<html><body><h1> ' . $suma . "</h1></body></html>" );
}

public function restaAction($number_1, $number_2 ) {
    $resta = $number_1 - $number_2;

    return new Response('<html><body><h1> ' . $resta . "</h1></body></html>" );
}

public function multiplicacionAction( $number_1, $number_2) {
    $multiplicacion = $number_1 * $number_2;

    return new Response('<html><body><h1> ' . $multiplicacion . "</h1></body></html>" );
}

public function divisionAction( $number_1, $number_2) {
    $division = $number_1 / $number_2;

    return new Response('<html><body><h1> ' . $division . "</h1></body></html>" );
}
}
