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

Route::get('/product/{id?}', [App\Http\Controllers\productController::class,'front_product_index']
)->name('product');


Route::get('/product_details/{id?}', [App\Http\Controllers\productController::class,'front_product_details']
)->name('product_details');

Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');

Route::get('/fix', function () {
    return view('fix');
})->name('fix');

Route::get('/customer_service', function () {
    return view('fix');
})->name('customer_service');

Route::post('/customer_service',[App\Http\Controllers\customerController::class,'fix_report']
)->name('fix_report');

Route::get('/customer_service/diy', function () {
    return view('customer_diy');
})->name('customer_diy');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/logout',[App\Http\Controllers\UserController::class,'logout']
)->name('logout');


Route::post('/search',[App\Http\Controllers\customerController::class,'search']
)->name('search');

Route::get('/unstructured',function(){
    return view('unstructured');
})->name('unstructured');

Route::get('/privacy_policy',function(){
    return view('privacy_policy');
})->name('privacy_policy');

Route::get('/user_policy',function(){
    return view('user_policy');
})->name('user_policy');

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

    Route::get('/backstage/product/{product_type_id}',[App\Http\Controllers\productController::class,'index']
    )->name('backstage-product-product_type_id');


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
    
    Route::post('/backstage/diy/find',[App\Http\Controllers\customerController::class,'find_diy']
    )->name('backstage-diy-find');

    Route::post('/backstage/diy/drop',[App\Http\Controllers\customerController::class,'diy_destroy']
    )->name('backstage-diy-drop');
    
    Route::post('/backstage/fix/find',[App\Http\Controllers\customerController::class,'find_fix']
    )->name('backstage-fix-find');

    Route::post('/backstage/fix/drop',[App\Http\Controllers\customerController::class,'fix_destroy']
    )->name('backstage-fix-drop');

    // backstage customer end
    Route::get('/backstage/news',[App\Http\Controllers\newsController::class,'create']
    )->name('backstage-news');

    Route::post('/backstage/news/store',[App\Http\Controllers\newsController::class,'store']
    )->name('backstage-news-store');

    Route::post('/backstage/news/find',[App\Http\Controllers\newsController::class,'find']
    )->name('backstage-news-find');

    Route::get('/backstage/product',[App\Http\Controllers\productController::class,'index']
    )->name('backstage-product');

    Route::post('/backstage/product/store',[App\Http\Controllers\productController::class,'store']
    )->name('backstage-product-store');

    Route::post('/backstage/product/drop',[App\Http\Controllers\productController::class,'destroy']
    )->name('backstage-product-drop');

    Route::post('/backstage/product/find',[App\Http\Controllers\productController::class,'find_product']
    )->name('backstage-product-find');

    Route::get('/backstage/product/edit/{id}',[App\Http\Controllers\productController::class,'edit']
    )->name('backstage-product-edit');

    Route::get('/backstage/customer', function() {
        return view('backstage.backstage_main');
    })->name('backstage-customer');
});


