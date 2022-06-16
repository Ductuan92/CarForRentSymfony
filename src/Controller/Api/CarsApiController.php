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

    private CarsTransformer $carsTransformer;
    private CarsRepository $carsRepository;

    /**
     * @param CarsTransformer $carsTransformer
     * @param CarsRepository $carsRepository
     */
    public function __construct(CarsTransformer $carsTransformer, CarsRepository $carsRepository)
    {
        $this->carsTransformer = $carsTransformer;
        $this->carsRepository = $carsRepository;
    }


    #[Route('/api/cars', 'add_car', methods: 'POST')]
    public function addCar(Request $request): Response
    {
        $param = $request->query->all();
        $car = $this->carsTransformer->arrayToObjectCar($param);
        $this->carsRepository->add($car, true);
        return $this->success(['add a new car successfully']);
    }


    #[Route('/api/cars', 'list_car', methods: 'GET')]
    public function listCars(): Response
    {
        $listCars = $this->carsRepository->findAll();
        $data = [];
        foreach ($listCars as $car) {
            array_push($data, $this->carsTransformer->objectToArray($car));
        }
        return $this->success($data);
    }


    #[Route('api/cars/{id}', 'update_car', methods: 'PUT')]
    public function updateCars(Request $request, Cars $cars)
    {
        $carsArray = $request->query->all();
        $carUpdate = $this->carsTransformer->arrayToObjectCar($carsArray);
        if (!$cars) {
            throw new Exception('Car not exist');
        }
        $this->carsRepository->update($cars, $carUpdate, true);
        return $this->success(['update car successfully']);
    }


    #[Route('api/cars/{id}', 'delete_car', methods: 'DELETE')]
    public function deleteCars(Cars $cars)
    {
        if ($cars) {
            $this->carsRepository->remove($cars, true);
        }
        return $this->success(['remove car successfully']);
    }
}
