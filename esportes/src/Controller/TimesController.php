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
}
