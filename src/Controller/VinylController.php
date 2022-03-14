<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    #[Route('/home', name: 'home')]
     public function homepage():Response
     {
          return 'lal';
     }
}