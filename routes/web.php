<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
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

Route::post('/logout',[App\Http\Controllers\UserController::class,'logout']
)->name('logout');



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

/**
 * backstage
 */

Route::group(['middleware' => 'auth'], function(){
    Route::get('/backstage', function() {
        return view('backstage.backstage_main');
    })->name('backstage');
    
    /**
     * backstage 產品介紹
     */

    Route::get('/backstage/product/glass',function(){
        return view('backstage.product.backstage_product_glass');
    })->name('backstage-product-glass');

    Route::get('/backstage/product/shower',function(){
        return view('backstage.product.backstage_product_shower');
    })->name('backstage-product-shower');

    Route::get('/backstage/product/toilet',function(){
        return view('backstage.product.backstage_product_toilet');
    })->name('backstage-product-toilet');

    Route::get('/backstage/product/clothes-hanger',function(){
        return view('backstage.product.backstage_product_clothes-hanger');
    })->name('backstage-product-clothes-hanger');

    Route::get('/backstage/product/floor',function(){
        return view('backstage.product.backstage_product_floor');
    })->name('backstage-product-floor');

    Route::get('/backstage/product/VAF',function(){
        return view('backstage.product.backstage_product_VAF');
    })->name('backstage-product-VAF');

    // backstage 產品介紹 end

    /**
     * backstage customer
     */
    Route::get('/backstage/customer/diy',function(){
        return view('backstage.customer.backstage_customer_diy');
    })->name('backstage-customer-diy');

    Route::get('/backstage/customer/fix',function(){
        return view('backstage.customer.backstage_customer_fix');
    })->name('backstage-customer-fix');

    // backstage customer end
    Route::get('/backstage/news',[App\Http\Controllers\newsController::class,'create']
    )->name('backstage-news');

    Route::post('/backstage/news',[App\Http\Controllers\newsController::class,'store']
    )->name('backstage-news-store');

    Route::get('/backstage/product', function() {
        return view('backstage.backstage_main');
    })->name('backstage-product');
    Route::get('/backstage/customer', function() {
        return view('backstage.backstage_main');
    })->name('backstage-customer');
});


