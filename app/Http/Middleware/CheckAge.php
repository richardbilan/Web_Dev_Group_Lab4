<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $age = $request->input('age'); // Retrieve the age from the request

        // Log the request details
        $this->logRequest($request);

        // Age validation logic
        if ($age < 18) {
            return redirect('/access-denied'); // Redirect if under 18
        } elseif ($age > 21) {
            return redirect('/restricted-dashboard'); // Redirect if over 21
        }

        // Proceed if age is between 18 and 21
        return $next($request);
    }

    /**
     * Log the request details to a file.
     */
    protected function logRequest(Request $request)
    {
        $logData = "Age: " . $request->input('age') . "\n" .
                   "Timestamp: " . now() . "\n" .
                   "URL: " . $request->fullUrl() . "\n" .
                   "Method: " . $request->method() . "\n\n";

        file_put_contents(storage_path('logs/age_log.txt'), $logData, FILE_APPEND); // Append to log file
    }
}
