<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController
{
    #[Route('/home', name: 'home')]
     public function homepage(): Response
     {
          return new Response('ok !');
     }

     #[Route('/browse/{slug}')]
     public function browser(string $slug = null): Response
     {
         if ($slug)
         {
             $title = 'Genre : ' . u(str_replace('-', ' ', $slug))->title(true);
         }else
         {
             $title = 'Tous genres';
         }


         return new Response($title);

     }
}