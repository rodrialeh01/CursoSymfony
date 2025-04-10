<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class TemplateController extends AbstractController
{
    #[Route('/template', name: 'template_inicio')]
    public function index(): Response
    {
        return $this->render("template/index.html.twig"); 
    }

    #[Route('/template/parametros/{id}/{slug}', name: 'template_parametros', 
    defaults:['id'=>1, 'slug'=>'algo'])]
    public function parametros(int $id, string $slug ): Response
    {
        die("id={$id} | slug={$slug}");
    }

    #[Route('/template/excepcion', name: 'template_exception')]
    public function excepcion(): Response
    {
        //throw $this->createNotFoundException('Esta URL no esta disponible');
        throw new NotFoundHttpException('Esta URL no existe');
    }

    #[Route('/template/trabajo', name: 'template_trabajo')]
    public function trabajo(): Response
    {
        return $this->render("template/trabajo.html.twig", ['nombre' => 'Rodrigo']); 
    }

    #[Route('/template/layout', name: 'template_layout')]
    public function layout(): Response
    {
        return $this->render("template/layout.html.twig"); 
    }
}
