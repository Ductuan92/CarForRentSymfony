<?php

namespace App\Controller;

use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUserName = $authenticationUtils->getLastUsername();
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
            'last_username' =>$lastUserName,
            'error' => $error,
        ]);
    }

    #[Route('/loginSuccess', name: 'loginSuccess')]
    public function loginSuccess()
    {
        if($this->getUser()){
            $roles = $this->getUser()->getRoles();
            foreach ($roles as $role){
                if($role == 'ROLE_ADMIN'){
                    return $this->redirectToRoute('admin');
                }
            }
            return $this->redirectToRoute('profile');
        }
    }

    #[Route('/logout' ,name: 'app_logout')]
    public function logout()
    {
        throw new \Exception();
    }
}
