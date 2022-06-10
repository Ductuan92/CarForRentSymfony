<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class LuckyController extends AbstractController
{
    #[Route('/hi/lucky', name:'lucky_number', methods: ['GET'])]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

    #[Route('/hi/{page}', name:'hi', methods: 'GET', priority: 0)]
    public function sayHi(): Response
    {
        $number = "hi";

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}
