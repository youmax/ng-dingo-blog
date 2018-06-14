<?php

namespace App\Http\Middleware;

use Closure;

class Localization
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
        $locale = ($request->hasHeader('Accept-Language'))
            ? $request->header('Accept-Language') : config('translatable.fallback_locale');
        config(['app.locale' => $locale]);
        return $next($request);
    }
}
