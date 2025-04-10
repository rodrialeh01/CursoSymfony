<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\UserFormType;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Form\LoginType;
use Symfony\Bundle\SecurityBundle\Security;


class AccesoController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em, private RequestStack $requestStack)
    {
        $this->em = $em;
    }
    
    #[Route('/acceso/login', name: 'acceso_login')]
    public function index(Request $request, ValidatorInterface $validator, Security $security, UserPasswordHasherInterface $passwordHasher): Response
    {
        $entity = new User();
        $form = $this->createForm(LoginType::class, $entity);
        $form->handleRequest($request);
        $submittedToken = $request->request->get('token');
        if($form->isSubmitted()){
            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $errors = $validator->validate($entity);
                if(count($errors)> 0){
                    return $this->render('acceso/login.html.twig', compact('form','errors'));
                }else{
                    $campos = $form->getData();
                    $user = $this->em->getRepository(User::class)->findOneBy(
                        ['email'=>$campos->getEmail()]
                    );
                    if(!$user){
                        $this->addFlash('css', 'danger');
                        $this->addFlash('mensaje', 'Las credenciales ingresadas no son válidas');
                        return $this->redirectToRoute('acceso_login');
                    }

                    if($passwordHasher->isPasswordValid($user, $campos->getPassword())){
                        $security->login($user);
                        $session = $this->requestStack->getSession();
                        $session->set('perfil_id', '1');
                        $session->set('perfil_nombre', 'Administrador');
                        $session->set('tienda_id', '7267');
                        $session->set('tienda_nombre', 'Tienda de la capital');
                        return $this->redirectToRoute('restringido_inicio');
                    }else{
                        $this->addFlash('css', 'danger');
                        $this->addFlash('mensaje', 'Las credenciales ingresadas no son válidas');
                        return $this->redirectToRoute('acceso_login');
                    }
                }
            }else{
                $this->addFlash('css', 'danger');
                $this->addFlash('mensaje', 'Ocurrió un error inesperado');
                return $this->redirectToRoute('acceso_login');
            }
        }
        return $this->render('acceso/login.html.twig', ['form'=>$form, 'errors'=>array()]);
    }

    /*
    #[Route('/acceso/login', name: 'acceso_login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('acceso/login.html.twig', [
            'last_username' => $lastUsername, 
            'error' => $error
        ]);
    }
    */

    #[Route('/acceso/registro', name: 'acceso_registro')]
    public function registro(Request $request, ValidatorInterface $validator, UserPasswordHasherInterface $passwordHasher): Response
    {
        $entity = new User();
        $form = $this->createForm(UserFormType::class, $entity);
        $form->handleRequest($request);
        $submittedToken = $request->request->get('token');
        if($form->isSubmitted()){
            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $errors = $validator->validate($entity);
                if(count($errors) > 0){
                    return $this->render('acceso/registro.html.twig', compact('form', 'errors'));
                }else{
                    $campos = $form->getData();
                    $existe = $this->em->getRepository(User::class)->findOneBy(
                        ['email' =>$campos->getEmail()]
                    );
                    if($existe){
                        $this->addFlash('css', 'danger');
                        $this->addFlash('mensaje', "El E-Mail {$campos->getEmail()} ingresado ya está siendo usado por otro usuario");
                        return $this->redirectToRoute('acceso_registro');
                    }
                    $entity->setNombre($campos->getNombre());
                    $entity->setEmail($campos->getEmail());
                    $entity->setPassword($passwordHasher->hashPassword($entity, $campos->getPassword()));
                    $entity->setRoles(['ROLE_USER']);
                    $this->em->persist($entity);
                    $this->em->flush();
                    $this->addFlash('css', 'success');
                    $this->addFlash('mensaje', 'Se creó el registro exitosamente');
                    return $this->redirectToRoute('acceso_registro');
                }   

            }else{
                $this->addFlash('css', 'warning');
                $this->addFlash('mensaje', 'Ocurrió un error inesperado');
                return $this->redirectToRoute('acceso_registro');
            }
        }
        return $this->render('acceso/registro.html.twig', ['form'=>$form, 'errors'=>array()]);
    }

    #[Route('/acceso/logout', name: 'acceso_logout')]
    public function acceso_logout()
    {
        
    }
}
