<?php
declare(strict_types=1);
namespace App\Facades;

use App\Services\PathUrlService;

class PathUrl extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return PathUrlService::class;
    }
}
