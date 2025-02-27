<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
    {
        foreach ($roles as $role) {   
            if (Auth::user()->hasRole($role)) {
                return $next($request);
                print_r($role);
            }
        }

        return response()->json(['error' => 'you can not access it '], 403);
    
      
    }
}
