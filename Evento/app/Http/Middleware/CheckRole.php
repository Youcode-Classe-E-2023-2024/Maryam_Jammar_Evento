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
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle($request, Closure $next, ...$roles)
    {
        // Check if the user has one of the required roles
        if ($request->user() && in_array($request->user()->role, $roles)) {
            return $next($request);
        }

        // Redirect based on role
        if ($request->user() && $request->user()->role === 'admin') {
            return redirect('/dashboard')->with('error', 'Unauthorized access.');
        } elseif ($request->user() && $request->user()->role === 'organizer') {
            return redirect('/organizer')->with('error', 'Unauthorized access.');
        } else {
            return redirect('/')->with('error', 'Unauthorized access.');
        }
    }

}
