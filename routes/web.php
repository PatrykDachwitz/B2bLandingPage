<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('view.mainPage');
})->name('mainPage');
Route::get('/product', function () {
    return view('view.product');
})->name('product');
