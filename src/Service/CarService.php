<?php

namespace App\Service;

use App\Entity\Cars;
use App\Repository\CarsRepository;

class CarService
{
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
}
