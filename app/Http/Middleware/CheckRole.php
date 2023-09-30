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
//    public function handle(Request $request, Closure $next): Response
//    {
//        return $next($request);
//    }

    public function handle($request, Closure $next, $role)
    {
        // Check if the user is authenticated and their role matches the required role
        if ($request->user() && $request->user()->role === $role) {
            return $next($request); // User has the required role, proceed to the route
        }

        return response()->json(['error' => 'Unauthorized'], 403); // User doesn't have the required role, return an unauthorized response
    }

}
