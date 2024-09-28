<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * This middleware is run during every request to your application.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // Other middleware
        'check.age' => \App\Http\Middleware\CheckAge::class, // Register CheckAge for routes
    ];
    

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */


    
}
