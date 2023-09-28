<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PerfilController extends AbstractController
{
    #[Route('/perfil', name: 'app_perfil')]
    public function index(): Response
    {
       $params = [
        "url" => "http://localhost/laravel-jwt/public/index.php/api/login", 
        "dados" => [
            "email" => "admin@admin",
            "password" => "admin123"
        ]
       ];

       $dados = $this -> curl($params);
       $dados = json_decode($dados);
    //    dump($dados);
    //    die;

        return $this->render('perfil/index.html.twig', [
            
            "teste" => $dados

        ]);
    }

    private function curl($params){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,$params["url"]);
        curl_setopt($ch, CURLOPT_POST, 1);
       
        curl_setopt($ch, CURLOPT_POSTFIELDS, 
                 http_build_query($params["dados"]));

        // Receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        curl_close($ch);

        return $server_output;
    }
}
