<?php

namespace App\Traits;

trait FindByTraits
{
    public function getParamForFindBy($param)
    {
        $field = [];
        $groupBy = null;
        $orderBy = null;
        $limit = null;
        foreach ($param as $item => $value) {
            switch ($item) {
                case 'orderBy':
                    $orderBy = $value;
                    break;
                case 'limit':
                    $limit = $value;
                    break;
                case 'groupBy':
                    $groupBy = $value;
                    break;
                default:
                    $field = array_merge($field, [$item => $value]);
                    break;
            }

            return [$field, $groupBy, $orderBy, $limit];
        }
    }
}
