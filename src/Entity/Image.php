<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $path;

    #[ORM\Column(type: 'datetime_immutable')]
    private $createdAt;

    #[ORM\OneToOne(mappedBy: 'thumbnail', targetEntity: Cars::class, cascade: ['persist', 'remove'])]
    private $cars;

    /**
     * @param $createdAt
     */
    public function __construct()
    {
        $this->createdAt = new DateTimeImmutable();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCars(): ?Cars
    {
        return $this->cars;
    }

    public function setCars(?Cars $cars): self
    {
        // unset the owning side of the relation if necessary
        if ($cars === null && $this->cars !== null) {
            $this->cars->setThumbnail(null);
        }

        // set the owning side of the relation if necessary
        if ($cars !== null && $cars->getThumbnail() !== $this) {
            $cars->setThumbnail($this);
        }

        $this->cars = $cars;

        return $this;
    }
}
