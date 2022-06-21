<?php

namespace App\Controller\Api;

use App\Entity\Rent;
use App\Repository\CarsRepository;
use App\Repository\RentRepository;
use App\Repository\UserRepository;
use App\Service\CarsService;
use App\Service\RentService;
use App\Traits\ResponseTraits;
use App\Transformer\RentTransformer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RentsApiController extends AbstractController
{
    use ResponseTraits;

    #[Route('api/rents', name: 'get_rent', methods: 'GET')]
    public function index(
        RentRepository $rentRepository,
        Request $request,
        RentService $rentService,
        RentTransformer $rentTransformer
    ): Response {
        $param = $request->query->all();
        $rents = $rentService->listRent($param);
        $data = [];
        foreach ($rents as $rent) {
            $data[] = $rentTransformer->objectToArray($rent);
        }

        return $this->success($data);
    }

    #[Route('api/rents', 'create_rent', methods: 'POST')]
    public function createRent(
        Request $request,
        RentService $rentService,
        UserRepository $userRepository,
        CarsRepository $carsRepository,
    ): Response {
        $param = $request->query->all();
        $car = $carsRepository->find($param['car']);
        $userName = $this->getUser()->getUserIdentifier();
        $user = $userRepository->findBy(['email' => $userName]);
        $rentService->createRent($car, $user[0], $param);

        return $this->success();
    }


    #[Route('api/rents/{id}', name: 'update_rent', methods: 'PUT')]
    public function updateRent(Rent $rent, Request $request, RentRepository $rentRepository): Response
    {
        $param = $request->query->all();
        $rentRepository->update($rent, $param, true);

        return $this->success();
    }


    #[Route('api/rents/{id}', name: 'delete_rent', methods: 'DELETE')]
    public function deleteRent(Rent $rent, RentRepository $rentRepository): Response
    {
        $rentRepository->remove($rent, true);

        return $this->success();
    }
}
