<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class RedirectController extends Controller {

    public function indexAction() {
        return new Response("RedireccionSatisfactoria");
    }

    public function internalRedirectAction() {
        return $this->redirectToRoute("redirect_index");
    }

    public function redirectPermanentAction() {
        return $this->redirectToRoute("redirect_permanent", array() , 301);
    }

    public function externalRedirectAction() {
        return $this->redirect("https://www.elmundo.es/");
    }



}
