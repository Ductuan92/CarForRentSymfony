<?php

namespace App\Controller;

use App\Entity\Cars;
use App\Repository\CarsRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarController extends AbstractController
{
    #[Route('car', name: 'app_car', methods: 'GET')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $carManager = $doctrine->getRepository(Cars::class);
        $cars = $carManager->findAll();
        return new Response('Saved new product with id '.$cars[0]->getId());
    }

    
    #[Route('car/addcar', name:'add_car', methods: 'GET')]
    public function addCars(CarsRepository $carsRepository): Response
    {
        $car = new Cars();
        $car->setBrand('honda');
        $car->setPrice(500);
        $car->setDescription('only one');
        $car->setImage('honda.jpeg');
        $carsRepository->add($car);

        return new Response('Saved new product with id '.$car->getBrand());
    }
}
