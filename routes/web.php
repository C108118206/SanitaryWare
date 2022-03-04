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

// 最新消息

Route::get('/news', function () {
    return view('news');
})->name('news');
Route::get('/product', function () {
    return view('dashboard');
})->name('product');
Route::get('/information', function () {
    return view('dashboard');
})->name('information');

// 產品介紹
Route::get('glass', function () {
    return view('dashboard');
});

Route::get('/shower', function () {
    return view('dashboard');
});

Route::get('/toilet', function () {
    return view('dashboard');
});

Route::get('/clothes-hanger', function () {
    return view('dashboard');
});

Route::get('/floor', function () {
    return view('dashboard');
});

Route::get('/VAF', function () {
    return view('dashboard');
});