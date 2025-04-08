<?php

namespace App\Controller;

use App\Entity\Persona;
use App\Entity\PersonaEntity;
use App\Form\PersonaEntityFormType;
use App\Entity\PersonaEntityValidacion;
use App\Entity\PersonaEntityUpload;
use App\Form\PersonaUploadType;
use App\Form\PersonaValidacionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class FormulariosController extends AbstractController
{
    #[Route('/formularios', name: 'formularios_inicio')]
    public function index(): Response
    {
        return $this->render('formularios/index.html.twig');
    }

    #[Route('/formularios/simple', name: 'formularios_simple')]
    public function simple(Request $request): Response
    {
        $formulario = $this->createFormBuilder(null)
        ->add('nombre', TextType::class, ['label'=>'Nombre'])
        ->add('correo', TextType::class, ['label'=>'E-Mail'])
        ->add('telefono', TextType::class, ['label'=>'Teléfono'])
        ->add('save', SubmitType::class)
        ->getForm();
        
        $submittedToken = $request->request->get('token');
        $formulario->handleRequest($request);
        if($formulario->isSubmitted()){
            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $campos = $formulario->getData();
                //print_r($campos);
                echo "Nombre:".$campos['nombre']." | E-Mail: ".$campos['correo']." | Telefono: ".$campos['telefono'];
                die();
            }else{
                $this->addFlash('css','warning');
                $this->addFlash('mensaje', 'Ocurrió un error inesperado');
                return $this->redirectToRoute('formularios_simple');
            }
        }
        return $this->render('formularios/simple.html.twig', compact('formulario'));
    }

    #[Route('/formularios/entity', name: 'formularios_entity')]
    public function entity(Request $request): Response
    {
        $persona = new Persona();
        $formulario = $this->createFormBuilder($persona)
        ->add('nombre', TextType::class, ['label'=>'Nombre'])
        ->add('correo', TextType::class, ['label'=>'E-Mail'])
        ->add('telefono', TextType::class, ['label'=>'Teléfono'])
        ->add('save', SubmitType::class)
        ->getForm();
        
        $submittedToken = $request->request->get('token');
        $formulario->handleRequest($request);
        if($formulario->isSubmitted()){
            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $campos = $formulario->getData();
                //print_r($campos);
                echo "Nombre:".$campos->getNombre()." | E-Mail: ".$campos->getCorreo()." | Telefono: ".$campos->getTelefono();
                die();
            }else{
                $this->addFlash('css','warning');
                $this->addFlash('mensaje', 'Ocurrió un error inesperado');
                return $this->redirectToRoute('formularios_entity');
            }
        }
        return $this->render('formularios/entity.html.twig', compact('formulario'));
    }

    #[Route('/formularios/type-form', name: 'formularios_type_form')]
    public function type_form(Request $request): Response
    {
        $persona = new PersonaEntity();
        $formulario = $this->createForm(PersonaEntityFormType::class, $persona);
        $submittedToken = $request->request->get('token');
        $formulario->handleRequest($request);
        if($formulario->isSubmitted()){
            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $campos = $formulario->getData();
                //print_r($campos);
                echo "Nombre:".$campos->getNombre()." | E-Mail: ".$campos->getCorreo()." | Telefono: ".$campos->getTelefono();
                die();
            }else{
                $this->addFlash('css','warning');
                $this->addFlash('mensaje', 'Ocurrió un error inesperado');
                return $this->redirectToRoute('formularios_entity');
            }
        }
        return $this->render('formularios/type_form.html.twig', compact('formulario'));
    }

    #[Route('/formularios/validacion', name: 'formularios_validacion')]
    public function validacion(Request $request, ValidatorInterface $validator): Response
    {
        $persona = new PersonaEntityValidacion();
        $formulario = $this->createForm(PersonaValidacionType::class, $persona);
        $submittedToken = $request->request->get('token');
        $formulario->handleRequest($request);
        if($formulario->isSubmitted()){
            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $errors = $validator->validate($persona);
                if(count($errors)>0){
                    return $this->render('formularios/validacion.html.twig', [
                        'formulario'=>$formulario,
                        'errors'=>$errors
                    ]);
                }else{
                    $campos = $formulario->getData();
                    //print_r($campos);
                    echo "Nombre:".$campos->getNombre()." | E-Mail: ".$campos->getCorreo()." | Telefono: ".$campos->getTelefono();
                    die();
                }
            }else{
                $this->addFlash('css','warning');
                $this->addFlash('mensaje', 'Ocurrió un error inesperado');
                return $this->redirectToRoute('formularios_entity');
            }
        }
        return $this->render('formularios/validacion.html.twig', [
            'formulario' => $formulario,
            'errors' => array()
        ]);
    }

    #[Route('/formularios/upload', name: 'formularios_upload')]
    public function upload(Request $request, ValidatorInterface $validator): Response
    {
        $persona = new PersonaEntityUpload();
        $formulario = $this->createForm(PersonaUploadType::class, $persona);
        $submittedToken = $request->request->get('token');
        $formulario->handleRequest($request);
        if($formulario->isSubmitted()){
            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $errors = $validator->validate($persona);
                if(count($errors)>0){
                    return $this->render('formularios/upload.html.twig', [
                        'formulario'=>$formulario,
                        'errors'=>$errors
                    ]);
                }else{
                    $foto = $formulario->get('foto')->getData();
                    if($foto){
                        $originalName=pathinfo($foto->getClientOriginalName(),PATHINFO_FILENAME);
                        $newfilename = time().'.'.$foto->guessExtension();
                        try{
                            $foto->move(
                                $this->getParameter('fotos_directory'),
                                $newfilename
                            );
                        }catch(FileException $e){
                            throw new \Exception("mensaje", "Ups ocurrió un error al intentar subir el archivo");
                        }
                        $persona->setFoto($newfilename);
                    }
                    $campos = $formulario->getData();
                    //print_r($campos);
                    echo "Nombre:".$campos->getNombre()." | E-Mail: ".$campos->getCorreo()." | Telefono: ".$campos->getTelefono(). " | Foto: ".$campos->getFoto();
                    die();
                }
            }else{
                $this->addFlash('css','warning');
                $this->addFlash('mensaje', 'Ocurrió un error inesperado');
                return $this->redirectToRoute('formularios_upload');
            }
        }
        return $this->render('formularios/upload.html.twig', [
            'formulario' => $formulario,
            'errors' => array()
        ]);
    }
}
