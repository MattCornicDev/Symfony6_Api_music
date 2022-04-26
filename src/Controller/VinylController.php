<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
     public function homepage(Environment $twig): Response
     {
         $tracks = [
             ['song' => 'Foule sentimental', 'artist' => 'Alain Souchon'],
             ['song' => 'Hotel California', 'artist' => 'Eagles'],
             ['song' => 'Pictures of Nothing', 'artist' => 'Jeff Woodell'],
             ['song' => 'Lost ones', 'artist' => 'Lauryn hill'],
             ['song' => 'Je te promet', 'artist' => 'Zaho'],
             ['song' => 'Song Of Lonely Mountain', 'artist' => 'Neil Finn'],
         ];


          $html = $twig->render('vinyl/homepage.html.twig', [
              'title' => 'Mes favs',
              'tracks' => $tracks
              ]);

          return new Response($html);
     }

     #[Route('/browse/{slug}', name: 'app_browse')]
     public function browser(string $slug = null): Response
     {


         $genre = $slug ? u(str_replace('-', ' ', $slug))->title(true) : null;


         return $this->render('vinyl/browse.html.twig',[
             'genre' => $genre,

         ]);

     }
}