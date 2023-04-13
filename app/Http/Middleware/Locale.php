<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $language = session()->get('website_language');

        App::setLocale($language);

        return $next($request);
    }
}