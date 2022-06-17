<?php

namespace App\Transformer;

use App\Entity\Cars;
use App\Entity\User;

class CarsTransformer
{
    public function arrayToObjectCar(array $carArray, User $user): Cars
    {
        $car = new Cars();

        $car->setBrand($carArray['brand']);
        $car->setUser($user);
        $car->setPrice($carArray['price']);
        $car->setSeats($carArray['seats']);

        if (!empty($carArray['image'])) {
            $car->setImage($carArray['image']);
        }

        if (!empty($carArray['color'])) {
            $car->setColor($carArray['color']);
        }

        if (!empty($carArray['description'])) {
            $car->setDescription($carArray['description']);
        }

        if (!empty($carArray['year'])) {
            $car->setYear($carArray['year']);
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

    public function queryToObject($param): Cars
    {
        $car = new Cars();
        foreach ($param as $item => $value) {
            $action = 'set' . ucfirst($item);
            $car->{$action}($value);
        }

        return $car;
    }
}
