<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogRequests
{
    public function handle(Request $request, Closure $next)
    {
        // Log the request details to log.txt
        $logData = sprintf(
            "[%s] %s %s\n",
            now(),
            $request->method(),
            $request->url()
        );

        \File::append(storage_path('logs/log.txt'), $logData);

        return $next($request);
    }
}
