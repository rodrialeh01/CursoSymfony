<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Utilidades\Utilidades;

class HelperController extends AbstractController
{
    #[Route('/helper', name: 'helper_inicio')]
    public function index(): Response
    {
        $saludo = Utilidades::saludo("Rodrigo Hernández");
        $u = new Utilidades();
        $saludo2 = $u->saludo2("Ale");
        return $this->render('helper/index.html.twig', compact('saludo', 'saludo2'));
    }
}
