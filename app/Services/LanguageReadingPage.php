<?php
declare(strict_types=1);
namespace App\Services;

use Illuminate\Support\Facades\App;

class LanguageReadingPage
{
    public function isRightPageReading() : bool {
        return in_array(App::getLocale(), config('language.rightPageRead'));
    }
}
