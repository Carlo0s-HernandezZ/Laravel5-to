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
        $response=$next($request);

        $response->headers->set('Cache-Control', 'nocache, no-store, max-age=0, must-revalidate');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('expires', 'Fri, 01 Jan 1990 00:00:00 GMT');

        return $response;
    }
}
