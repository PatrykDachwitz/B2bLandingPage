<?php

namespace App\Providers;

use App\Services\Geolocation;
use App\Services\GeolocationIpApi;
use App\Services\PathUrlService;
use Illuminate\Support\ServiceProvider;
use function Clue\StreamFilter\fun;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(PathUrlService::class, function ($app) {
            return new PathUrlService();
        });

        $this->app->singleton(Geolocation::class, GeolocationIpApi::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
