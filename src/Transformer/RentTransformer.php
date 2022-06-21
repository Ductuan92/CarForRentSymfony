<?php

namespace App\Transformer;

use App\Entity\Cars;
use App\Entity\Rent;
use App\Entity\User;
use App\Repository\CarsRepository;
use DateTimeImmutable;

class RentTransformer
{
    public function arrayToObject($car, $user, $param): Rent
    {
        $rent = new Rent();
        $rent->setUser($user);
        $rent->setCar($car);
        foreach ($param as $item => $value) {
            $action = 'set' . ucfirst($item);
            if ($item == 'startDate' || $item == 'endDate') {
                $value = new DateTimeImmutable($value);
            }
            if ($item != 'car') {
                $rent->{$action}($value);
            }
        }

        return $rent;
    }

    public function objectToArray(Rent $rent)
    {
        return [
            $rent->getId(),
            $rent->getUser(),
            $rent->getCar(),
            $rent->getStatus(),
            $rent->getStartDate(),
            $rent->getEndDate(),
            $rent->getCreatedAt(),
            $rent->getUpdatedAt(),
        ];
    }
}
