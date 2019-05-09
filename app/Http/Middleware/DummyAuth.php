<?php

namespace App\Http\Middleware;

use Closure;

class DummyAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->get("app_key") != env('APP_API_KEY')) {
            dd("Du har inte behörighet att visa sidan");
        }
        return $next($request);
    }
}
