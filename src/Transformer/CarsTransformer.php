<?php

namespace App\Transformer;

use App\Entity\Cars;
use App\Entity\User;
use App\Traits\FindByTraits;

class CarsTransformer
{
    public function objectToArray(Cars $car): array
    {
        return [
            $car->getId(),
            $car->getBrand(),
            $car->getColor(),
            $car->getPrice(),
            $car->getUser(),
            $car->getDescription(),
            $car->getSeats(),
            $car->getYear(),
            $car->getCreatedAt(),
            $car->getThumbnail(),
        ];
    }

    public function listToArray($listCars): array
    {
        $data = [];
        foreach ($listCars as $car) {
            $data[] = $this->objectToArray($car);
        }

        return $data;
    }
}
