<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TimelineController extends AbstractController
{
    #[Route('/timeline', name: 'app_timeline')]
    public function index(): Response
    {
        return $this->render('timeline/timeline.html.twig', [
            'controller_name' => 'TimelineController',
        ]);
    }
    #[Route('/fotos', name: 'app_timeline')]
    public function fotos(): Response
    {
        return $this->render('timeline/timeline.html.twig', [
            'controller_name' => 'TimelineController',
        ]);
    }
}
