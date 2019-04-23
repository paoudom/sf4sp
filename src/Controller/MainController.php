<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController
{

    /**
     * @Route("/", name="homepage")
     * @return Response
     * 
     */
   public function index(): Response
   {

       return $this->render('main/index.html.twig', [
    ]);
   }


}