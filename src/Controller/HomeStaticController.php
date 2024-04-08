<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeStaticController extends AbstractController
{
    #[Route('/home/static', name: 'app_home_static')]
    public function index(): Response
    {
        return $this->render('home_static/index.html.twig', [
            'controller_name' => 'HomeStaticController',
        ]);
    }
}
