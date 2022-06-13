<?php

namespace App\Controller\Api;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiRegistrationController extends AbstractController
{
    #[Route('/api/registration', name: 'app_api_registration')]
    public function index(Request $request): Response
    {
        $user = json_decode($request->getContent(),true);
        var_dump( $user);die();
    }
}
