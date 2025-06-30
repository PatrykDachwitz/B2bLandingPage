<?php

use App\Facades\LanguageReadingPageFacade;
use App\Http\Controllers\ChangeLanguageController;
use App\Http\Controllers\FormContactController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\updateLocale;
use Illuminate\Support\Facades\Route;


Route::group([
    'middleware' => updateLocale::class
], function () {
    Route::get('', MainPageController::class)->name('mainPage');
    Route::get('/decor/{product}', function (string $product) {
        $prefix = 'view.decors.';
        if (LanguageReadingPageFacade::isRightPageReading()) {
            $prefix .= "ae.";
        }

        switch ($product) {
            case "colorLine":
                return view("{$prefix}colorLine");
                break;
            case "smartmirror":
                return view("{$prefix}smartmirror");
                break;
            case "nolan":
            case "losano":
                return view("{$prefix}nolan");
                break;
            case "solidLine":
                return view("{$prefix}solidLine");
                break;
            case "steindekor":
                return view("{$prefix}steindekor");
                break;
            case "stoneLine":
            case "zora":
                return view("{$prefix}stoneLine");
                break;
            case "homapal":
                return view("{$prefix}homapal");
                break;
            case "laminat":
                return view("{$prefix}laminat");
                break;
        }
    })->name('decors');

    Route::get('/widerrufsbelehrung', function () {
        if (LanguageReadingPageFacade::isRightPageReading()) {
            return view('view.ae.policePrivate');
        } return view('view.policePrivate');

    })->name('policePrivate');

    Route::get('/shop-regeln', function () {
        if (LanguageReadingPageFacade::isRightPageReading()) {
            return view('view.ae.rule');
        } return view('view.rule');
    })->name('rule');

    Route::get('/products/{product}', ProductController::class)->name('product');

    Route::post('/send-mail', FormContactController::class)
        ->name('formContact');

    Route::post('/change-language', ChangeLanguageController::class)
        ->name('changeLanguage');
});
