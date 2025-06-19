<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ApiController extends Controller
{
    protected function respond($data = null, string $message = 'Success', int $code = Response::HTTP_OK, bool $isError = false): JsonResponse
    {
        return response()->json(
            data: [
                'meta' => [
                    'code' => $code,
                    'is_error' => $isError,
                    'message' => $message,
                ],
                'data' => $data,
            ],
            status: $code,
            headers: [
                'Content-Type' => 'application/json',
            ]
        );
    }

    protected function respondError(string $message = 'Something went wrong', int $code = Response::HTTP_INTERNAL_SERVER_ERROR): JsonResponse
    {
        return $this->respond(null, $message, $code, true);
    }
}
