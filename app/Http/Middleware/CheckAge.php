<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle(Request $request, Closure $next, $age = 18)
    {
        // Check if the provided age in the query is less than the required age
        if ($request->query('age') < $age) {
            return response('Access Denied. You must be at least ' . $age . ' years old.', 403);
        }

        // Proceed if age is greater than or equal to the specified age
        return $next($request);
    }
}
