<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Other global middleware...
        \App\Http\Middleware\LogRequests::class, // Register LogRequests globally
    ];

    protected $middlewareGroups = [
        'web' => [
            // Other web middleware...
        ],
    ];

    protected $routeMiddleware = [
        // Other route middleware...
        'checkAge' => \App\Http\Middleware\CheckAge::class, // Register CheckAge middleware
    ];
}
