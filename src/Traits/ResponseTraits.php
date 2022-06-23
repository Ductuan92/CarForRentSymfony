<?php

namespace App\Traits;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait ResponseTraits
{
    public function success($data = [])
    {
        $dataReturn = [
            'status' => 'success',
            'data' => $data,
        ];

        return new JsonResponse($dataReturn, Response::HTTP_OK);
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
