<?php
declare(strict_types=1);
namespace App\Services;

use Illuminate\Support\Facades\Http;

class GeolocationIpApi implements Geolocation
{
    private AvailableLanguage $availableLanguage;
    public function __construct(AvailableLanguage $availableLanguage)
    {
        $this->availableLanguage = $availableLanguage;
    }

    public function getLangCodeByIp(string $ip): string
    {
        $countryCode = $this->getCountryIso($ip);
        dump(`countryCode {$countryCode}`);
        return $this->availableLanguage->getLangCodeByCountryIso($countryCode);
    }

    private function getCountryIso(string $ip) : string {
        $response = Http::get("http://ip-api.com/json/{$ip}");

        if ($response->status() === 200 && !empty($response->json('countryCode'))) {
            return $response->json('countryCode');
        } else {
            return config('language.defaultLanguage');
        }
    }
}
