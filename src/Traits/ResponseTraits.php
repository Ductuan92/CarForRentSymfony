<?php

namespace App\Traits;

use Symfony\Component\HttpFoundation\JsonResponse;

trait ResponseTraits
{
    public function success($data)
    {
        $dataReturn = [
            'status' => 'success',
            'data' => $data,
        ];
        return new JsonResponse($dataReturn, 200);
    }

    public function error($data, $statusCode)
    {
        $dataReturn = [
            'status' => 'error',
            'data' => $data,
        ];
        return new JsonResponse($dataReturn, $statusCode);
    }
}
