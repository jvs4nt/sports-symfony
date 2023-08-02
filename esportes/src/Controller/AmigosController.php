<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AmigosController extends AbstractController
{
    #[Route('/amigos', name: 'app_amigos')]
    public function index(): Response
    {
        return $this->render('amigos/index.html.twig', [
            'controller_name' => 'AmigosController',
        ]);
    }
}
