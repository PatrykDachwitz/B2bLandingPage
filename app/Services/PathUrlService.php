<?php
declare(strict_types=1);
namespace App\Services;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

class PathUrlService
{

    public function getModificationCurrentPath(string $countrySearch) : string {
        $currentRouteName = Route::currentRouteName();
        $currentParams = Request::route()->parameters();
        $currentParams['lang'] = $countrySearch;

        return \route($currentRouteName, $currentParams);
    }
}
