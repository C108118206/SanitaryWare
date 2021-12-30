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

Route::get('/news', function () {
    return view('dashboard');
})->name('news');
Route::get('/product', function () {
    return view('dashboard');
})->name('product');
Route::get('/information', function () {
    return view('dashboard');
})->name('information');

