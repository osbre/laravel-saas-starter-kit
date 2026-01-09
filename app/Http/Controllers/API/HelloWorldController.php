<?php

declare(strict_types=1);

namespace App\Http\Controllers\API;

use Illuminate\Http\JsonResponse;
use Spatie\RouteAttributes\Attributes\Get;

class HelloWorldController
{
    #[Get('/hello-world')]
    public function __invoke(): JsonResponse
    {
        return response()->json(['message' => 'Hello, World!']);
    }
}
