<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TimesController extends AbstractController
{
    #[Route('/times', name: 'app_times')]
    public function index(): Response
    {
        return $this->render('times/index.html.twig', [
            'controller_name' => 'TimesController',
        ]);
    }

    #[Route('/criarTime', name: 'app_criarTime')]
    public function criarTime(): Response
    {
        return $this->render('times/criar.html.twig', [
            'controller_name' => 'TimesController',
        ]);
    }

    #[Route('/procurarTime', name: 'app_procurarTime')]
    public function procurarTime(): Response
    {
        return $this->render('times/procurar.html.twig', [
            'controller_name' => 'TimesController',
        ]);
    }

    #[Route('/timePerfil', name: 'app_timePerfil')]
    public function timePerfil(): Response
    {
        return $this->render('times/perfil.html.twig', [
            'controller_name' => 'TimesController',
        ]);
    }
}
