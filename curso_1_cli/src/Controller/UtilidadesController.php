<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

//email
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

//http client
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Form\CategoriaApiType;

//filesystem
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;

//pdf
use Dompdf\Dompdf;

class UtilidadesController extends AbstractController
{
    public function __construct(
        private HttpClientInterface $client,
    )
    {}
    
    #[Route('/utilidades', name: 'utilidades_inicio')]
    public function index(): Response
    {
        return $this->render('utilidades/index.html.twig');
    }

    #[Route('/utilidades/enviar-email', name: 'utilidades_email')]
    public function enviar_email(MailerInterface $mailer): Response
    {
        $email = (new Email())
                ->from(new Address('hello@demomailtrap.co', 'Juan Pérez'))
                ->to('boydrod2001@gmail.com')
                ->subject('Mail de prueba')
                ->text('Texto del mail')
                ->html('<p>Contenido mail <strong>con negritas</strong></p>')
                ;
        try{
            $mailer->send($email);
        } catch(TransportExceptionInterface $e){
            die($e);
        }
        return $this->render('utilidades/enviar_email.html.twig');
    }

    #[Route('/utilidades/api-rest', name: 'utilidades_api_rest')]
    public function api_rest(): Response
    {
        $response = $this->client->request(
            'GET',
            'https://www.api.tamila.cl/api/categorias',
            [
                'headers'=>
                [
                    'Authorization'=> 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MzYsImlhdCI6MTc0NDA0NDk0NiwiZXhwIjoxNzQ2NjM2OTQ2fQ.Fxwu6eYyjNXquAq3TbJY7UXvdJkXtgUNQV10rG0p_Ds'
                ]
            ]
        );

        
        return $this->render('utilidades/api_rest.html.twig', compact('response'));
    }

    #[Route('/utilidades/api-rest/crear', name: 'utilidades_api_rest_crear')]
    public function api_rest_crear(Request $request): Response
    {
        $formulario = $this->createForm(CategoriaApiType::class, null);
        $submittedToken = $request->request->get('token');
        if($formulario->isSubmitted()){
            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $campos = $formulario->getData();
                $response = $this->client->request(
                    'POST',
                    'https://www.api.tamila.cl/api/categorias',
                    [
                        'json' =>['nombre' =>$campos['nombre']],
                        'headers'=>
                        [
                            'Authorization'=> 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MzYsImlhdCI6MTc0NDA0NDk0NiwiZXhwIjoxNzQ2NjM2OTQ2fQ.Fxwu6eYyjNXquAq3TbJY7UXvdJkXtgUNQV10rG0p_Ds'
                        ]
                    ]
                );
                $this->addFlash('css', 'success');
                $this->addFlash('mensaje', 'Se creo el registro exitosamente');
                return $this->redirectToRoute('utilidades_api_rest_crear');
            }else{
                $this->addFlash('css', 'warning');
                $this->addFlash('mensaje', 'Ocurrió un error inesperado');
                return $this->redirectToRoute('utilidades_api_rest_crear');
            }
        }
        return $this->render('utilidades/api_rest_add.html.twig', compact('formulario'));
    }

    #[Route('/utilidades/api-rest/editar/{id}', name: 'utilidades_api_rest_editar')]
    public function api_rest_editar(Request $request, int $id): Response
    {
        $datos = $this->client->request(
            'GET',
            'https://www.api.tamila.cl/api/categorias/'.$id, [
                'headers' => [
                    'Authorization'=> 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MzYsImlhdCI6MTc0NDA0NDk0NiwiZXhwIjoxNzQ2NjM2OTQ2fQ.Fxwu6eYyjNXquAq3TbJY7UXvdJkXtgUNQV10rG0p_Ds'
                ]
            ]
        );
        $formulario = $this->createForm(CategoriaApiType::class, null);
        $submittedToken = $request->request->get('token');
        if($formulario->isSubmitted()){
            die($formulario->isSubmitted());
            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $campos = $formulario->getData();
                $response = $this->client->request(
                    'POST',
                    'https://www.api.tamila.cl/api/categorias',
                    [
                        'json' =>['nombre' =>$campos['nombre']],
                        'headers'=>
                        [
                            'Authorization'=> 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MzYsImlhdCI6MTc0NDA0NDk0NiwiZXhwIjoxNzQ2NjM2OTQ2fQ.Fxwu6eYyjNXquAq3TbJY7UXvdJkXtgUNQV10rG0p_Ds'
                        ]
                    ]
                );
                $this->addFlash('css', 'success');
                $this->addFlash('mensaje', 'Se creo el registro exitosamente');
                return $this->redirectToRoute('utilidades_api_rest_editar', ['id'=>$id]);
            }else{
                $this->addFlash('css', 'warning');
                $this->addFlash('mensaje', 'Ocurrió un error inesperado');
                return $this->redirectToRoute('utilidades_api_rest_editar', ['id'=>$id]);
            }
        }
        return $this->render('utilidades/api_rest_editar.html.twig', compact('formulario', 'datos'));
    }

    #[Route('/utilidades/api-rest/delete/{id}', name: 'utilidades_api_rest_delete')]
    public function api_rest_delete(Request $request, int $id): Response
    {
        $datos = $this->client->request(
            'DELETE',
            'https://www.api.tamila.cl/api/categorias/'.$id, [
                'headers' => [
                    'Authorization'=> 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MzYsImlhdCI6MTc0NDA0NDk0NiwiZXhwIjoxNzQ2NjM2OTQ2fQ.Fxwu6eYyjNXquAq3TbJY7UXvdJkXtgUNQV10rG0p_Ds'
                ]
            ]
        );
        $this->addFlash('css', 'success');
        $this->addFlash('mensaje', 'Se creo el registro exitosamente');
        return $this->redirectToRoute('utilidades_api_rest');
    }

    #[Route('/utilidades/filesystem', name: 'utilidades_filesystem')]
    public function filesystem(): Response
    {
        $filesystem = new Filesystem();
        $ejemplo_mkdir = "/home/rodrialeh/Documentos/CursoSymfony/curso_1_cli/midirectorio";
        if(!$filesystem->exists($ejemplo_mkdir)){
            $filesystem->mkdir($ejemplo_mkdir, 0777);
        }else{
            // Directorio origen, Directorio destino
            $filesystem->copy('/home/rodrialeh/Documentos/CursoSymfony/curso_1_cli/midirectorio', $ejemplo_mkdir.'/descarga_cli');
            //nombre original, nombre modificado
            $filesystem->rename($ejemplo_mkdir.'/descarga_cli.png', $ejemplo_mkdir. '/descarga_cli_modificado.png');
            //eliminar
            $filesystem->remove([$ejemplo_mkdir.'/descarga_cli_modificado.png']);
        }
        
        return $this->render('utilidades/filesystem.html.twig');
    }

    #[Route('/utilidades/pdf', name: 'utilidades_pdf')]
    public function pdf(): Response
    {
        
        return $this->render('utilidades/pdf.html.twig');
    }

    #[Route('/utilidades/generar', name: 'utilidades_pdf_generar')]
    public function pdf_generar(): Response
    {
        $data = [
            'imageSrc'=>$this->imageToBase64($this->getParameter('kernel.project_dir').'/public/images/yoda.png'),
            'nombre' => 'Rodrigo Hernández',
            'pais' => 'Guatemala',
            'telefono' => '123458',
            'correo' => 'rod@gmail.com'
        ];
        $html = $this->renderView('utilidades/pdf_generar.html.twig', $data);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();

        return new Response(
            $dompdf->stream('resume', ['Attachment' => false]),
            Response::HTTP_OK,
            ['Content-Type' => 'application/pdf']
        );
    }

    private function imageToBase64($path) {
        $path = $path;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/'. $type . ';base64,'. base64_encode($data);
        return $base64;
    }

    #[Route('/utilidades/excel', name: 'utilidades_excel')]
    public function excel(): Response
    {
        
        return $this->render('utilidades/excel.html.twig');
    }
}
