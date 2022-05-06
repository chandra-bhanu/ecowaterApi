<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/pages/privacy', function () {
    return view('privacy');
})->name('privacyLink');

Route::get('/pages/terms', function () {
    return view('terms');
})->name('termsLink');

Route::get('/pages/shipping', function () {
    return view('shipping');
})->name('shippingLink');

Route::get('/pages/refund', function () {
    return view('refund');
})->name('refundLink');

Route::get('/pages/contact', function () {
    return view('contact');
})->name('contactLink');

Route::get('/pages/about', function () {
    return view('about');
})->name('aboutLink');

Route::get('/pages/products', function () {
    return view('products');
})->name('productsLink');
