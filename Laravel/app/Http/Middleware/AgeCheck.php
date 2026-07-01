<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "AgeCheck Middleware is working!<br>";

        if ($request->age < 18) {
            die("you are not eligible to access this page.");
        }
        return $next($request);
    }
}
