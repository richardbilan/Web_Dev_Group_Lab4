<?php 
namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        // Other global middleware
        \App\Http\Middleware\LogRequests::class, // Register LogRequests as global middleware
    ];
    
    protected $routeMiddleware = [
        // Other route-specific middleware
        'checkAge' => \App\Http\Middleware\CheckAge::class, // Register CheckAge middleware
    ];
    
    
}
