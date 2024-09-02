<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if ($role == '1' && auth()->user()->level != '1' ) {
            abort(403);
        }
        if ($role == '2' && auth()->user()->role != '2' ) {
            abort(403);
        }
        return $next($request);
    }
}
