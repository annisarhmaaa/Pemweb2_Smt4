<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return('Ini Halaman utama');
});

Route::get('/categories', function () {
    return('Ini Halaman Kategori');
});

Route::get('/reviews', function () {
    return('Ini Halaman Review');
});

Route::get('/promos', function () {
    return('Ini Halaman Promo');
});

Route::get('/products', function () {
    return('Ini Halaman Produk');
});

Route::get('/products/{id}', function ($id) {
    return "Ini Detail produk dengan ID: $id";
});

Route::get('/orders', function () {
    return('Ini Halaman Order/CheckOut');
});

Route::get('/payments', function () {
    return('Ini Halaman Pembayaran');
});

require __DIR__.'/auth.php';