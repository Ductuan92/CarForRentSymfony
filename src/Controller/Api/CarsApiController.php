<?php

namespace App\Controller\Api;

use App\Controller\Constant\ErrorConstant;
use App\Controller\Constant\SuccessConstant;
use App\Entity\Cars;
use App\Repository\CarsRepository;
use App\Repository\UserRepository;
use App\Service\CarService;
use App\Traits\ResponseTraits;
use App\Transformer\CarsTransformer;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarsApiController extends AbstractController
{
    use ResponseTraits;

    #[Route('/api/cars', 'add_car', methods: 'POST')]
    public function addCar(
        CarsTransformer $carsTransformer,
        Request $request,
        CarService $carService,
        UserRepository $userRepository
    ): Response {
        $param = $request->query->all();
        $user = $userRepository->findOneBy([$this->getUser()->getUserIdentifier()]);
        $car = $carsTransformer->arrayToObjectCar($param, $user);
        $carService->addCar($car);
        return $this->success();
    }


    #[Route('/api/cars', 'list_car', methods: 'GET')]
    public function listCars(
        CarsTransformer $carsTransformer,
        CarsRepository $carsRepository,
        Request $request
    ): Response {
        $param = $request->query->all();
        $listCars = $carsRepository->findAllQuery($param);
        $data = [];
        foreach ($listCars as $car) {
            array_push($data, $carsTransformer->objectToArray($car));
        }
        return $this->success($data);
    }


    #[Route('api/cars/{id}', 'update_car', methods: 'PUT')]
    public function updateCars(
        Cars $cars,
        CarsTransformer $carsTransformer,
        CarsRepository $carsRepository,
        Request $request
    ): Response {
        $carsArray = $request->query->all();

        $carUpdate = $carsTransformer->queryToObject($carsArray);
        $carsRepository->update($cars, $carUpdate, true);
        return $this->success([SuccessConstant::UPDATE_SUCCESS]);
    }


    /**
     * @throws Exception
     */
    #[Route('api/cars/{id}', 'delete_car', methods: 'DELETE')]
    public function deleteCars(CarsRepository $carsRepository, Cars $cars): Response
    {
        if (empty($cars)) {
            throw new Exception(ErrorConstant::ERROR_CAR_NOT_EXISTS, 400);
        }
        $carsRepository->remove($cars, true);
        return $this->success([SuccessConstant::REMOVE_SUCCESS]);
    }
}
