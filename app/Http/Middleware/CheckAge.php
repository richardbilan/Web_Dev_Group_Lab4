<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle(Request $request, Closure $next)
    {
        // ini si age query parameters
        $age = $request->input('age');

        // Log the age for debugging
        \Log::info("Checking age: " . $age);

        // pag check ini if less than 18
        if (!is_numeric($age) || (int)$age < 18) {
            return redirect('/access-denied');
        }

     
        return $next($request);
    }
    
}
