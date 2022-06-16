<?php

namespace App\Transformer;

use App\Entity\Cars;

class CarsTransformer
{
    public function arrayToObjectCar(array $carArray): Cars
    {
        $car = new Cars();

        if (!empty($carArray['brand'])) {
            $car->setBrand($carArray['brand']);
        }

        if (!empty($carArray['image'])) {
            $car->setImage($carArray['image']);
        }

        if (!empty($carArray['price'])) {
            $car->setPrice($carArray['price']);
        }

        if (!empty($carArray['color'])) {
            $car->setColor($carArray['color']);
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
        ];
    }
}
