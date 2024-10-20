<?php
declare(strict_types=1);
namespace App\Http\Middleware;

use App\Services\AvailableLanguage;
use App\Services\Geolocation;
use App\Services\GeolocationIpApi;
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
    private Geolocation $geolocation;

    public function __construct(AvailableLanguage $availableLanguage, Geolocation $geolocation)
    {
        $this->geolocation = $geolocation;
        $this->availableLanguage = $availableLanguage;
    }

    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('lang')) {
            try {
                $languageIso = $this->geolocation
                    ->getLangCodeByIp($request->ip());

                session()->put([
                    'lang' => $languageIso
                ]);

            } catch (\Exception) {
                session()->put([
                    'lang' => config('language.defaultLanguage')
                ]);
            }
        }

        $this->availableLanguage->setLanguage(
            session()
                ->get('lang')
        );

        return $next($request);
    }
}
