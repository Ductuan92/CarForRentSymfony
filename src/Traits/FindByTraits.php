<?php

namespace App\Traits;

trait FindByTraits
{
    public function getParamForFindBy($param)
    {
        $field = [];
        $orderBy = null;
        $limit = null;
        foreach ($param as $item => $value) {
            if ($item == 'orderBy') {
                $orderBy[$value] = 'ASC';
            } elseif ($item == 'limit') {
                $limit = $value;
            } else {
                $field[$item] = $value;
            }
        }
        return [$field, $orderBy, $limit];
    }
}
