<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotificacoesController extends AbstractController
{
    #[Route('/notificacoes', name: 'app_notificacoes')]
    public function index(): Response
    {
        return $this->render('notificacoes/index.html.twig', [
            'controller_name' => 'NotificacoesController',
        ]);
    }
}
