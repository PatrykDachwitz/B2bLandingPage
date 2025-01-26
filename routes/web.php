<?php

use App\Http\Controllers\ChangeLanguageController;
use App\Http\Controllers\FormContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::group([
   //'prefix' => "/{lang}",
    'middleware' => \App\Http\Middleware\updateLocale::class
], function () {
    Route::get('', function () {
        return view('view.mainPage');
    })->name('mainPage');
    Route::get('/decor/{product}', function (string $product) {
        switch ($product) {
            case "colorLine":
                return view('view.decors.colorLine');
                break;
/*            case "gleamLine":
                return view('view.decors.gleamLine');
                break;*/
            case "nolan":
                return view('view.decors.nolan');
                break;
            case "solidLine":
                return view('view.decors.solidLine');
                break;
            case "steindekor":
                return view('view.decors.steindekor');
                break;
            case "stoneLine":
                return view('view.decors.stoneLine');
                break;
            case "zora":
                return view('view.decors.stoneLine');
                break;
            case "losano":
                return view('view.decors.nolan');
                break;
        }
    })->name('decors');

    Route::get('/widerrufsbelehrung', function () {
        return view('view.policePrivate');
    })->name('policePrivate');

    Route::get('/shop-regeln', function () {
        return view('view.rule');
    })->name('rule');

    Route::get('/products/{product}', ProductController::class)->name('product');

    Route::post('/send-mail', FormContactController::class)
        ->name('formContact');



    Route::post('/change-language', ChangeLanguageController::class)
        ->name('changeLanguage');
});
