<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StudyTrackerAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $hour = now()->hour;

    if ($hour < 9 || $hour > 18) {
        return response('Study Tracker is available only between 9 AM and 6 PM');
    }

    return $next($request);
    }
}
