<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('web.homepage');
});

Route::get('/products', function () {
    return view('web.products');
});

Route::get('/categories', function () {
    return view('web.categories');
});

Route::get('/reviews', function () {
    return view('web.reviews');
});

Route::get('/promos', function () {
    return view('web.promos');
});

Route::get('/orders', function () {
    return view('web.orders');
});

Route::get('/payments', function () {
    return view('web.payments');
});

Route::get('/products/{id}', function ($id) {
    return "Ini Detail produk dengan ID: $id";
});

require __DIR__.'/auth.php';