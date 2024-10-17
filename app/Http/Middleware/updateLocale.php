<?php
declare(strict_types=1);
namespace App\Http\Middleware;

use App\Services\AvailableLanguage;
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

    private AvailableLanguage $availableLanguage;

    public function __construct(AvailableLanguage $availableLanguage)
    {
        $this->availableLanguage = $availableLanguage;
    }

    public function handle(Request $request, Closure $next): Response
    {

        if (session()->has('lang')) {
            $this->availableLanguage->setLanguage(
                session()
                    ->get('lang')
            );
        } else {
            $this->availableLanguage->setLanguage(config('language.defaultLanguage'));
        }

        return $next($request);
    }
}
