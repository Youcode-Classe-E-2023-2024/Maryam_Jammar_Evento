<?php

namespace App\Http\Middleware;

use Closure;

class OrganizerMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role === 'organizer') {
            return $next($request);
        }

        abort(403, 'Unauthorized action.');

//        return redirect('/')->with('error', 'You do not have permission to access this page.');
    }
}
