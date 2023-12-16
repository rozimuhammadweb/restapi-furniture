<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function response( $data):JsonResponse
    {
        return response()->json([
            'data' => $data
        ]);
    }


    public function success(string $message, $data = []): JsonResponse
    {
        return response()->json([
            'success' => true,
            'status' => 'success',
            'message' => $message ?? 'operation success',
            'data' => $data
        ]);
    }

    public function error(string $message,  $data = []): JsonResponse
    {
        return response()->json([
            'success' => false,
            'status' => 'error',
            'message' => $message ?? 'error occured',
            'data' => $data
        ]);
    }
}
