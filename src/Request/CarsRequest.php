<?php

namespace App\Request;

use App\Entity\Cars;
use App\Traits\AutoSetterTraits;

class CarsRequest
{
    use AutoSetterTraits;

    #[Assert\type('integer')]
    private $id;

    #[Assert\type('string')]
    private $brand;

    #[Assert\type('string')]
    private $color;

    #[Assert\type('integer')]
    private $price;

    #[Assert\type('string')]
    private $description;

    #[Assert\type('integer')]
    private $seats;

    #[Assert\type('integer')]
    private $year;

    #[Assert\type('DateTime')]
    private $createdAt;

    #[Assert\type('integer')]
    private $user;

    #[Assert\type('integer')]
    private $rents;

    #[Assert\type('integer')]
    private $thumbnail;


    public function fromArray(array $requests, $userId = null): CarsRequest
    {
        $car = $this->autoSet($requests);
        $car->setUser($userId);

        return $car;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSeats(): ?int
    {
        return $this->seats;
    }

    public function setSeats(int $seats): self
    {
        $this->seats = $seats;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
