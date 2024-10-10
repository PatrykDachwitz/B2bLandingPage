<?php
declare(strict_types=1);
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class updateLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */


    public function handle(Request $request, Closure $next): Response
    {
        $lang = $request->route('lang');

        if (in_array($lang, config('language.availableLanguage'))) {
            App::setLocale($lang);
        } else {
            App::setLocale(config('language.defaultLanguage'));
        }

        return $next($request);
    }
}
