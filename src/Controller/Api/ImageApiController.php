<?php

namespace App\Controller\Api;

use App\Controller\Constant\SuccessConstant;
use App\Traits\ResponseTraits;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImageApiController extends AbstractController
{
    use ResponseTraits;

    #[Route('/api/image', name: 'app_api_image', methods: 'POST')]
    public function index(Request $request): Response
    {
        return $this->success();
    }
}
