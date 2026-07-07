<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NumberCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "Number MiddleWare";
        echo "<br>";

        if($request->number<18){
            die('you cannot access the number');
        }
        return $next($request);
    }
}
