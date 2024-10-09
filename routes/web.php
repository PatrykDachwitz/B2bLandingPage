<?php

use App\Http\Controllers\FormContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/shop-regeln', function () {
    return view('view.rule');
})->name('rule');

Route::get('/decor/{product}', function (string $product) {
    switch ($product) {
        case "colorLine":
            return view('view.decors.colorLine');
            break;
        case "gleamLine":
            return view('view.decors.gleamLine');
            break;
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
    }
})->name('decors');

Route::get('/widerrufsbelehrung', function () {
    return view('view.policePrivate');
})->name('policePrivate');

Route::get('/', function () {
    return view('view.mainPage');
})->name('mainPage');

Route::get('/products/{product}', ProductController::class)->name('product');

Route::post('/send-mail', FormContactController::class)
    ->name('formContact');

Route::post('/send-mail', FormContactController::class)
    ->name('formContact');

