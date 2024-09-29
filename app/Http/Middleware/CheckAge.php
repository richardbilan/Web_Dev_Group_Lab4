<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle(Request $request, Closure $next, $age = 18)
    {
        $userAge = $request->query('age', 0);

        // Redirect to "access-denied" if age is less than 18
        if ($userAge < 18) {
            return redirect('/access-denied');
        }

        // Redirect to "restricted-dashboard" if age is less than the specified age (e.g., 21)
        if ($userAge < $age) {
            return redirect('/restricted-dashboard');
        }

        return $next($request);
    }
}
