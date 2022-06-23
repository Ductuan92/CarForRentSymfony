<?php

namespace App\Controller\Api;

use App\Controller\Constant\ErrorConstant;
use App\Controller\Constant\MessageConstant;
use App\Controller\Constant\SuccessConstant;
use App\Entity\Cars;
use App\Repository\CarsRepository;
use App\Repository\UserRepository;
use App\Request\CarsRequest;
use App\Service\CarsService;
use App\Traits\ResponseTraits;
use App\Transformer\CarsTransformer;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class CarsApiController extends AbstractController
{
    use ResponseTraits;

    private ValidatorInterface $validator;

    /**
     * @param ValidatorInterface $validator
     */
    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    #[Route('/api/cars', 'add_car', methods: 'POST')]
    public function addCar(
        Request $request,
        CarsService $carService,
        UserRepository $userRepository,
        CarsRequest $carRequest,
    ): Response {
        $param = $request->query->all();
        $userEmail = $this->getUser()->getUserIdentifier();
        $user = $userRepository->findOneBy([$userEmail]);
        $car = $carRequest->fromArray($param, $user);
        $this->validate($car);
        $carService->addCar($car);

        return $this->success();
    }


    #[Route('/api/cars', 'list_car', methods: 'GET')]
    public function listCars(
        CarsRequest $carRequest,
        CarsTransformer $carsTransformer,
        CarsService $carsService,
        Request $request,
    ): Response {
        $param = $request->query->all();
        $listCars = $carsService->listCars($param);
        $data = $carsTransformer->listToArray($listCars);

        return $this->success($data);
    }


    #[Route('api/cars/{id}', 'update_car', methods: 'PUT')]
    public function updateCars(
        Cars $cars,
        CarsTransformer $carsTransformer,
        CarsRepository $carsRepository,
        Request $request,
        CarsRequest $carsRequest,
        ValidatorInterface $validator,
    ): Response {
        $param = $request->query->all();
        $carUpdate = $carsRequest->fromArray($param);
        $validator->validate($carUpdate);
        $carsRepository->update($cars, $param, true);

        return $this->success([MessageConstant::UPDATE_SUCCESS]);
    }


    /**
     * @throws Exception
     */
    #[Route('api/cars/{id}', 'delete_car', methods: 'DELETE')]
    public function deleteCars(CarsRepository $carsRepository, Cars $cars): Response
    {
        if (empty($cars)) {
            throw new Exception(MessageConstant::CAR_NOT_EXISTS_ERROR, 400);
        }
        $carsRepository->remove($cars, true);

        return $this->success([MessageConstant::REMOVE_SUCCESS]);
    }

    private function validate($car)
    {
        $errors = $this->validator->validate($car);
        if (!empty($errors)) {
            throw new Exception(MessageConstant::BAD_REQUEST, Response::HTTP_BAD_REQUEST);
        }
    }
}
