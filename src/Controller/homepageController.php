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
}