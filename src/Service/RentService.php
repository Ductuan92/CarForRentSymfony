<?php

namespace App\Service;

use App\Entity\Rent;
use App\Repository\RentRepository;
use App\Traits\FindByTraits;
use App\Transformer\RentTransformer;

class RentService
{
    use FindByTraits;

    private RentRepository $rentRepository;
    private RentTransformer $rentTransformer;

    /**
     * @param RentRepository $rentRepository
     */
    public function __construct(RentRepository $rentRepository, RentTransformer $rentTransformer)
    {
        $this->rentRepository = $rentRepository;
        $this->rentTransformer = $rentTransformer;
    }


    public function createRent($car, $user, $param): void
    {
        $rent = $this->rentTransformer->arrayToObject($car, $user, $param);
        $this->rentRepository->add($rent, true);
    }

    public function listRent($param): array
    {
        [$field, $orderBy, $limit] = $this->getParamForFindBy($param);

        return $this->rentRepository->findBy($field, $orderBy, $limit);
    }
}
