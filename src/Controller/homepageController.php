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
}