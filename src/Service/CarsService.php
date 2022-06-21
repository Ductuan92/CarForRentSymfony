<?php

namespace App\Service;

use App\Entity\Cars;
use App\Entity\User;
use App\Repository\CarsRepository;
use App\Traits\FindByTraits;

class CarsService
{
    use FindByTraits;

    private CarsRepository $carsRepository;

    /**
     * @param CarsRepository $carsRepository
     */
    public function __construct(CarsRepository $carsRepository)
    {
        $this->carsRepository = $carsRepository;
    }


    public function addCar(Cars $car)
    {
        $this->carsRepository->add($car, true);
    }

    public function listCars($param): array
    {
        [$field, $orderBy, $limit] = $this->getParamForFindBy($param);

        return $this->carsRepository->findBy($field, $orderBy, $limit);
    }
}
