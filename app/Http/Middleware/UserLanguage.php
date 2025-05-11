<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class UserLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();

        $response = Http::get("https://ipapi.co/{$ip}/json/");
        $country = $response->json('country');

        $locale = match ($country) {
            'BR' => 'pt_BR',
            default => 'en',
        };

        App::setLocale($locale);

        return $next($request);
    }
}
