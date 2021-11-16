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

}
