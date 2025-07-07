<?php
declare(strict_types=1);
namespace App\Providers;

use App\Facades\LanguageReadingPageFacade;
use App\Repository\CategoryBannerInterface;
use App\Repository\CategoryInterface;
use App\Repository\Eloquent\Category;
use App\Repository\Eloquent\CategoryBanner;
use App\Repository\Eloquent\Menu;
use App\Repository\Eloquent\Product;
use App\Repository\MenuInterface;
use App\Repository\ProductInterface;
use App\Services\Geolocation;
use App\Services\GeolocationIpApi;
use App\Services\LanguageReadingPage;
use App\Services\PathUrlService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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

        $this->app->singleton(LanguageReadingPageFacade::class, LanguageReadingPage::class);

        $this->app->singleton(
            CategoryBannerInterface::class,
            CategoryBanner::class
        );
        $this->app->singleton(
            ProductInterface::class,
            Product::class
        );
        $this->app->singleton(
            MenuInterface::class,
            Menu::class
        );
        $this->app->singleton(
            CategoryInterface::class,
            Category::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(
        Menu $menu
    ): void
    {
        if (Schema::hasTable("menus")) {
            $menus = $menu->get();
            View::share("menus", $menus);
        }

    }
}
