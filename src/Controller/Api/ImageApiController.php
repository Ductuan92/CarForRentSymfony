<?php

namespace App\Controller\Api;

use App\Service\ImageService;
use App\Traits\ResponseTraits;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImageApiController extends AbstractController
{
    use ResponseTraits;

    #[Route('/api/image', name: 'app_api_image', methods: 'POST')]
    public function addImage(Request $request, ImageService $imageService): Response
    {
        $file = $request->files->get('image');
        $image = $imageService->upLoad($file);

        return $this->success($image->getId());
    }
}
