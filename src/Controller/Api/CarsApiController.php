<?php

namespace App\Controller\Api;

use App\Entity\Cars;
use App\Repository\CarsRepository;
use App\Traits\ResponseTraits;
use App\Transformer\CarsTransformer;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarsApiController extends AbstractController
{
    use ResponseTraits;

    #[Route('/api/cars', 'add_car', methods: 'POST')]
    public function addCar(CarsTransformer $carsTransformer, CarsRepository $carsRepository, Request $request): Response
    {
        $param = $request->query->all();
        $car = $carsTransformer->arrayToObjectCar($param);
        $carsRepository->add($car, true);
        return $this->success(['add a new car successfully']);
    }


    #[Route('/api/cars', 'list_car', methods: 'GET')]
    public function listCars(CarsTransformer $carsTransformer, CarsRepository $carsRepository): Response
    {
        $listCars = $carsRepository->findAll();
        $data = [];
        foreach ($listCars as $car) {
            array_push($data, $carsTransformer->objectToArray($car));
        }
        return $this->success($data);
    }


    #[Route('api/cars/{id}', 'update_car', methods: 'PUT')]
    public function updateCars(CarsTransformer $carsTransformer, CarsRepository $carsRepository, Request $request, Cars $cars)
    {
        $carsArray = $request->query->all();
        $carUpdate = $carsTransformer->arrayToObjectCar($carsArray);
        if (!$cars) {
            throw new Exception('Car not exists');
        }
        $carsRepository->update($cars, $carUpdate, true);
        return $this->success(['update car successfully']);
    }


    /**
     * @throws Exception
     */
    #[Route('api/cars/{id}', 'delete_car', methods: 'DELETE')]
    public function deleteCars(CarsRepository $carsRepository, Cars $cars)
    {
        if (empty($cars)) {
            throw new Exception('Car not exits', 200);
        }
        $carsRepository->remove($cars, true);
        return $this->success(['remove car successfully']);
    }
}
