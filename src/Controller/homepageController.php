<?php


namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class homepageController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(){

        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/downloads")
     */
    public function downloads(){

        return $this->render('default/downloads.html.twig');
    }

    /**
     * @Route("/who_are_we")
     */
    public function whoAreWe(){

        return $this->render('default/whoarewe.html.twig');
    }

    /**
     * @Route("/who_are_we/charte")
     */
    public function charte(){

        return $this->render('default/charte.html.twig');
    }

    /**
     * @Route("/know-how")
     */
    public function knowhow(){
        return $this->render('default/knowhow.html.twig');
    }

    /**
     * @Route("/services")
     */
    public function services(){
        return $this->render('default/services.html.twig');
    }

    /**
     * @Route("/references")
     */
    public function reference(){
        return $this->render('default/reference.html.twig');
    }
}