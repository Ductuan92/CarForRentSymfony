<?php

namespace App\Transformer;

use App\Entity\Cars;
use App\Entity\User;
use App\Traits\FindByTraits;

class CarsTransformer
{
    public function arrayToObjectCar(array $carArray, User $user): Cars
    {
        $car = new Cars();
        $car->setUser($user);

        foreach ($carArray as $item => $value) {
            $action = 'set' . ucfirst($item);
            $car->{$action}($value);
        }

        return $car;
    }

    public function objectToArray(Cars $car): array
    {
        return [
            $car->getId(),
            $car->getBrand(),
            $car->getColor(),
            $car->getPrice(),
            $car->getImage(),
            $car->getUser(),
            $car->getDescription(),
            $car->getSeats(),
            $car->getYear(),
            $car->getCreatedAt(),
        ];
    }

    public function arrayToObject($param): Cars
    {
        $car = new Cars();

        foreach ($param as $item => $value) {
            $action = 'set' . ucfirst($item);
            $car->{$action}($value);
        }

        return $car;
    }
}
