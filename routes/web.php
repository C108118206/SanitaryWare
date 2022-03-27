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

Route::get('/product', [App\Http\Controllers\productController::class,'front_product_index']
)->name('product');

Route::get('/product/{id}', [App\Http\Controllers\productController::class,'front_product_index']
)->name('product-type');

Route::get('/product_details/{id}', [App\Http\Controllers\productController::class,'front_product_details']
)->name('product_details');

Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');

Route::get('/fix', function () {
    return view('fix');
})->name('fix');

Route::get('/customer_service', function () {
    return view('customer_service');
})->name('customer_service');

Route::get('/customer_service/diy', function () {
    return view('customer_diy');
})->name('customer_diy');

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

    Route::get('/backstage/product/glass',[App\Http\Controllers\productController::class,'index_glass']
    )->name('backstage-product-glass');

    Route::get('/backstage/product/shower',[App\Http\Controllers\productController::class,'index_shower']
    )->name('backstage-product-shower');

    Route::get('/backstage/product/toilet',[App\Http\Controllers\productController::class,'index_toilet']
    )->name('backstage-product-toilet');

    Route::get('/backstage/product/clothes-hanger',[App\Http\Controllers\productController::class,'index_clothes_hanger']
    )->name('backstage-product-clothes-hanger');

    Route::get('/backstage/product/floor',[App\Http\Controllers\productController::class,'index_floor']
    )->name('backstage-product-floor');

    Route::get('/backstage/product/VAF',[App\Http\Controllers\productController::class,'index_VAF']
    )->name('backstage-product-VAF');

    // backstage 產品介紹 end

    /**
     * backstage customer
     */
    Route::get('/backstage/customer/diy',[App\Http\Controllers\customerController::class,'index_diy']
    )->name('backstage-customer-diy');

    Route::get('/backstage/customer/fix',[App\Http\Controllers\customerController::class,'index_fix']
    )->name('backstage-customer-fix');

    Route::post('/backstage/customer/diy',[App\Http\Controllers\customerController::class,'diy_store']
    )->name('backstage-diy-store');

    Route::post('/backstage/customer/fix',[App\Http\Controllers\customerController::class,'fix_store']
    )->name('backstage-fix-store');

    Route::post('/backstage/diy/drop',[App\Http\Controllers\customerController::class,'diy_destroy']
    )->name('backstage-diy-drop');

    Route::post('/backstage/fix/drop',[App\Http\Controllers\customerController::class,'fix_destroy']
    )->name('backstage-fix-drop');

    // backstage customer end
    Route::get('/backstage/news',[App\Http\Controllers\newsController::class,'create']
    )->name('backstage-news');

    Route::post('/backstage/news',[App\Http\Controllers\newsController::class,'store']
    )->name('backstage-news-store');

    Route::get('/backstage/product',[App\Http\Controllers\productController::class,'index']
    )->name('backstage-product');

    Route::post('/backstage/product',[App\Http\Controllers\productController::class,'store']
    )->name('backstage-product-store');

    Route::post('/backstage/product/drop',[App\Http\Controllers\productController::class,'destroy']
    )->name('backstage-product-drop');

    Route::get('/backstage/product/edit/{id}',[App\Http\Controllers\productController::class,'edit']
    )->name('backstage-product-edit');

    Route::get('/backstage/customer', function() {
        return view('backstage.backstage_main');
    })->name('backstage-customer');
});


