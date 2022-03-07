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
    return view('dashboard');
})->name('dashboard');

// dashboard 上方nav

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/product_details', function () {
    return view('product_details');
})->name('product_details');

Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');

Route::get('/fix', function () {
    return view('fix');
})->name('fix');

Route::get('/customer_service', function () {
    return view('customer_service');
})->name('customer_service');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/search', function () {
    return view('dashboard');
})->name('search');

// 產品介紹
Route::get('/glass', function () {
    return view('dashboard');
})->name('glass');

Route::get('/shower', function () {
    return view('dashboard');
})->name('shower');

Route::get('/toilet', function () {
    return view('dashboard');
})->name('toilet');

Route::get('/clothes-hanger', function () {
    return view('dashboard');
})->name('clothes-hanger');

Route::get('/floor', function () {
    return view('dashboard');
})->name('floor');

Route::get('/VAF', function () {
    return view('dashboard');
})->name('VAF');