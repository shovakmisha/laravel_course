<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogMiddleware
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
        // ф-ція info логує запити. Тепер коли я перейду по роуту test, цей запит запишеться в логи
        // [2024-04-03 12:52:26] local.INFO: запрос {"foo":"bar"} - це буде в логах
        // local береться з конфігів(APP_ENV=local). INFO - це сама ф-ція. Це різновид попереджень php(info, warning, fatal, ...)
        // info('запрос', ['foo' => 'bar']);

        // [2024-04-03 12:58:53] local.INFO: http://localhost:5555/test {"foo":"bar"} - це прийде коли я запрошу в url - http://localhost:5555/test?foo=bar
        info($request->url(), $request->all()); // Тобто $request->all() - це масив з усім, що йде після ?
        return $next($request);
    }
}
