<?php

namespace App\Traits;

trait FindByQueryTraits
{
    public function findByQuery($param, $groupBy = null, $oderBy = null, $limit = 10): array
    {
        $qb = $this->createQueryBuilder(static::TABLE_ALIAS);
        foreach ($param as $item => $value) {
            $qb->where(static::TABLE_ALIAS . ".${item} = :item")->setParameter('item', $value);
        }
        $query = $qb->getQuery();

        return $query->execute();
    }
}
