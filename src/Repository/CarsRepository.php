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

    public function update(Cars $entity, array $carUpdate, bool $flush = false): void
    {
        foreach ($carUpdate as $item => $value) {
            $action = 'set' . ucfirst($item);
            $entity->{$action}($value);
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
