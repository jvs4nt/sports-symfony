<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EsportesController extends AbstractController
{
    #[Route('/esportes', name: 'app_esportes')]
    public function index(): Response
    {
        return $this->render('esportes/index.html.twig', [
            'controller_name' => 'EsportesController',
        ]);
    }
}
