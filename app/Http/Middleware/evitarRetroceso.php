<?php

//codigo para evitar el retroceso en las paginas web, usando el comando php artisan make:middleware evitarRetroceso

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Psr7\Header;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class evitarRetroceso
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
   /*      $response = $next($request);
        return $response->header('Cache-Control', 'nocache, no-store, max age=0, must-revalidate', true)
        ->header('Pragam', 'no-cache')
        ->header('Expire', 'Fri, 01 Jan 1999 00:00:00 GMT'); */
        return $next($request);
    }
}
