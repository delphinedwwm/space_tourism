<?php

namespace App\Http\Middleware;

use App\Models\Destination;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NavLinks
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd('navlinks');
        $destination = Destination::first('id');

        $navlinks= [
            "destination" => $destination ->id,
            "crew" => $crew ->id,

        ];

        view()->share('navlinks', $navlinks);

// dd($navlinks);
        return $next($request);
    }
}
