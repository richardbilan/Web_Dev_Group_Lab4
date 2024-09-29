<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle(Request $request, Closure $next, $age = 18)
    {
        $userAge = $request->query('age');

        if ($userAge < 18) {
            return redirect('/access-denied');
        }

        if ($userAge >= 18 && $userAge < 21) {
            return redirect('/restricted-dashboard'); // Adjust this to show restricted content
        }

        return $next($request);
    }
}
