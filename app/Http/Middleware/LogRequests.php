<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogRequests
{
    public function handle(Request $request, Closure $next)
    {
        // Log the request details with additional information
        Log::info('Request Details:', [
            'method' => $request->method(),
            'url' => $request->url(),
            'ip' => $request->ip(),
            'headers' => $request->headers->all(),
            'query' => $request->query(),
            'timestamp' => now(),
        ]);

        return $next($request); // Pass the request to the next middleware
    }
}
