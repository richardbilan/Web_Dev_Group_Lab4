<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogRequests
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('Request URL: ' . $request->fullUrl() . ' | Method: ' . $request->method() . ' | Timestamp: ' . now());
        
        return $next($request);
    }
}
