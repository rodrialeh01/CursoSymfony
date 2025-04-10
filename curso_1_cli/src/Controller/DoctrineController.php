<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DoctrineController extends AbstractController
{
    #[Route('/doctrine', name: 'doctrine_inicio')]
    public function index(): Response
    {
        return $this->render('doctrine/index.html.twig');
    }
}
