<?php

namespace App\Repository;

use App\Entity\Cars;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Exception;

/**
 * @extends ServiceEntityRepository<Cars>
 *
 * @method Cars|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cars|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cars[]    findAll()
 * @method Cars[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarsRepository extends ServiceEntityRepository
{
    private const TABLE_ALIAS = 'b';

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cars::class);
    }

    /**
     * @throws Exception
     */
    public function add(Cars $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Cars $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function update(Cars $entity, Cars $carUpdate, bool $flush = false): void
    {
        if (!empty($carUpdate->getBrand())) {
            $entity->setBrand($carUpdate->getBrand());
        }
        if (!empty($carUpdate->getColor())) {
            $entity->setColor($carUpdate->getColor());
        }
        if (!empty($carUpdate->getPrice())) {
            $entity->setPrice($carUpdate->getPrice());
        }
        if (!empty($carUpdate->getImage())) {
            $entity->setImage($carUpdate->getImage());
        }
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAllQuery($param): array
    {
        $qb = $this->createQueryBuilder(static::TABLE_ALIAS);
        foreach ($param as $item => $value) {
            $qb->where(static::TABLE_ALIAS . ".${item} = :item")->setParameter('item', $value);
        }
        $query = $qb->getQuery();
        return $query->execute();
    }
}
