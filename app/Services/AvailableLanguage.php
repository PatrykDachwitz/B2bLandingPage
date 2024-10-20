<?php
declare(strict_types=1);
namespace App\Services;

use Illuminate\Support\Facades\App;

class AvailableLanguage
{

    public function getAvailableLanguageBySearchLanguage(string $languageSearch) : string{

        if (in_array($languageSearch, config('language.availableLanguage'))) {
            return $languageSearch;
        } else {
            return config('language.defaultLanguage');
        }
    }

    public function setLanguage(string $lang) : void {
        $langChange = $this->getAvailableLanguageBySearchLanguage($lang);

        App::setLocale($langChange);
    }

    public function getLangCodeByCountryIso(string $countryIso) : string {
        if (isset(config('language.groupLanguageByCountryIso')[$countryIso]) && !empty(config('language.groupLanguageByCountryIso')[$countryIso])) {
            return config('language.groupLanguageByCountryIso')[$countryIso];
        } else {
            return config('language.defaultLanguage');
        }
    }
}
