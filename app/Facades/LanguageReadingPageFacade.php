<?php
declare(strict_types=1);
namespace App\Facades;

use App\Services\LanguageReadingPage;

class LanguageReadingPageFacade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return LanguageReadingPage::class;
    }
}
