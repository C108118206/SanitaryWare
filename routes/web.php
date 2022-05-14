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



Route::get('/', [App\Http\Controllers\newsController::class,'index'])->name('dashboard');

Route::get('/news/{id?}', [App\Http\Controllers\newsController::class,'show'])->name('news');

Route::get('/product/{id?}', [App\Http\Controllers\productController::class,'front_product_index']
)->name('product');


Route::get('/product_details/{id?}', [App\Http\Controllers\productController::class,'front_product_details']
)->name('product_details');

Route::get('/about_us',[App\Http\Controllers\customerController::class,'about_us']
)->name('about_us');

Route::get('/about_us#story',[App\Http\Controllers\customerController::class,'about_us']
)->name('about_us_story');
Route::get('/about_us#business_item',[App\Http\Controllers\customerController::class,'about_us']
)->name('about_us_business_item');
Route::get('/about_us#performance',[App\Http\Controllers\customerController::class,'about_us']
)->name('about_us_performance');

Route::get('/customer_service', function () {
    return view('customer_service');
})->name('customer_service');

Route::post('/customer_service',[App\Http\Controllers\customerController::class,'fix_report']
)->name('fix_report');

Route::get('/customer_service/diy', [App\Http\Controllers\customerController::class,'front_diy']
)->name('customer_diy');

Route::get('/login', function () {
    return view('login');
})->name('login');



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
    Route::get('/backstage',[App\Http\Controllers\newsController::class,'create']
    )->name('backstage');
    
    Route::post('/logout',[App\Http\Controllers\UserController::class,'logout']
    )->name('logout');
    Route::get('/logout',[App\Http\Controllers\UserController::class,'logout']
    )->name('logout-get');
    /**
     * backstage 產品介紹
     */

    Route::get('/backstage/product/{product_type_id}',[App\Http\Controllers\productController::class,'index']
    )->name('backstage-product-product_type_id');

    Route::post('/backstage/product/store',[App\Http\Controllers\productController::class,'store']
    )->name('backstage-product-store');

    Route::post('/backstage/product_type/store',[App\Http\Controllers\productController::class,'store_type']
    )->name('backstage-product-type-store');

    Route::get('/backstage/product/drop/{id}',[App\Http\Controllers\productController::class,'destroy']
    )->name('backstage-product-drop');

    Route::get('/backstage/product_type/drop/{id}',[App\Http\Controllers\productController::class,'destroy_type']
    )->name('backstage-product-type-drop');
    

    Route::get('/backstage/product/edit/{id}',[App\Http\Controllers\productController::class,'edit']
    )->name('backstage-product-edit');

    Route::get('/backstage/product/image/edit/{id}',[App\Http\Controllers\productController::class,'edit_image'])
    ->name('backstage-product-image');

    Route::post('/backstage/product/image/store',[App\Http\Controllers\productController::class,'store_image'])
    ->name('backstage-product-image-store');



    // backstage 產品介紹 end

    /**
     * backstage customer
     */

    // backstage News
    Route::get('/backstage/customer/fix',[App\Http\Controllers\customerController::class,'index_fix']
    )->name('backstage-customer-fix');

    Route::post('/backstage/customer/fix',[App\Http\Controllers\customerController::class,'fix_store']
    )->name('backstage-fix-store');
    
    Route::post('/backstage/fix/find',[App\Http\Controllers\customerController::class,'find_fix']
    )->name('backstage-fix-find');

    Route::get('/backstage/fix/drop/{id}',[App\Http\Controllers\customerController::class,'fix_destroy']
    )->name('backstage-fix-drop');

    Route::get('/backstage/fix/finish/{id}',[App\Http\Controllers\customerController::class,'fix_finish']
    )->name('backstage-fix-finish');

    // backstage story
    Route::get('/backstage/customer/story',[App\Http\Controllers\customerController::class,'index_story']
    )->name('backstage-customer-story');

    Route::post('/backstage/customer/story',[App\Http\Controllers\customerController::class,'story_store']
    )->name('backstage-story-store');
    // backstage business
    Route::get('/backstage/customer/business',[App\Http\Controllers\customerController::class,'index_business']
    )->name('backstage-customer-business');
    // backstage performance
    Route::get('/backstage/customer/performance',[App\Http\Controllers\customerController::class,'index_performance']
    )->name('backstage-customer-performance');
    
    Route::post('/backstage/customer/performance',[App\Http\Controllers\customerController::class,'performance_store']
    )->name('backstage-performance-store');
    
    Route::get('/backstage/performance/drop/{id}',[App\Http\Controllers\customerController::class,'performance_destroy']
    )->name('backstage-performance-drop');

    //backstage me
    Route::get('/backstage/customer/me',[App\Http\Controllers\customerController::class,'index_me']
    )->name('backstage-customer-me');

    Route::post('/backstage/customer/store/me',[App\Http\Controllers\customerController::class,'store_me']
    )->name('backstage-customer-me-store');

    //backstage business
    Route::get('/backstage/customer/business',[App\Http\Controllers\customerController::class,'index_business']
    )->name('backstage-customer-business');

    Route::post('/backstage/customer/store/business',[App\Http\Controllers\customerController::class,'store_business']
    )->name('backstage-customer-business-store');

    Route::post('/backstage/customer/store/business_item',[App\Http\Controllers\customerController::class,'store_business_item']
    )->name('backstage-customer-business_item-store');

    Route::post('/backstage/customer/store/business_type',[App\Http\Controllers\customerController::class,'store_business_type']
    )->name('backstage-customer-business_type-store');

    Route::get('/backstage/customer/destroy/business/{id}',[App\Http\Controllers\customerController::class,'business_destroy']
    )->name('backstage-customer-business-destroy');

    Route::get('/backstage/customer/destroy/business_item/{id}',[App\Http\Controllers\customerController::class,'business_item_destroy']
    )->name('backstage-customer-business_item-destroy');

    Route::get('/backstage/customer/destroy/business_type/{id}',[App\Http\Controllers\customerController::class,'business_type_destroy']
    )->name('backstage-customer-business_type-destroy');

    //backstage diy
    Route::get('/backstage/customer/diy',[App\Http\Controllers\customerController::class,'index_diy']
    )->name('backstage-customer-diy');

    Route::post('/backstage/customer/diy',[App\Http\Controllers\customerController::class,'diy_store']
    )->name('backstage-diy-store');

    Route::get('/backstage/diy/drop/{id}',[App\Http\Controllers\customerController::class,'diy_destroy']
    )->name('backstage-diy-drop');
    // backstage News
    Route::get('/backstage/news',[App\Http\Controllers\newsController::class,'create']
    )->name('backstage-news');

    Route::post('/backstage/news/store',[App\Http\Controllers\newsController::class,'store']
    )->name('backstage-news-store');

    Route::post('/backstage/news/find',[App\Http\Controllers\newsController::class,'find']
    )->name('backstage-news-find');

    Route::get('/backstage/news/drop/{id}',[App\Http\Controllers\newsController::class,'destroy']
    )->name('backstage-news-drop');

    //AJAX最新消息(編輯抓值)
    Route::get('/backstage/news/get/{id}',[App\Http\Controllers\newsController::class,'get_value']
    )->name('get-news-json');

    //AJAX工程實績(編輯抓值)
    Route::get('/backstage/performance/get/{id}',[App\Http\Controllers\customerController::class,'get_per_value']
    )->name('get-performance-json');

    //AJAX品牌故事(編輯抓值)
    Route::get('/backstage/story/get/{id}',[App\Http\Controllers\customerController::class,'get_story_value']
    )->name('get-story-json');

    //AJAX維修通報(編輯抓值)
    Route::get('/backstage/fix/get/{id}',[App\Http\Controllers\customerController::class,'get_fix_value']
    )->name('get-fix-json');

    //AJAX DIY(編輯抓值)
    Route::get('/backstage/diy/get/{id}',[App\Http\Controllers\customerController::class,'get_diy_value']
    )->name('get-diy-json');

    //AJAX產品(編輯抓值)
    Route::get('/backstage/product/get/{id}',[App\Http\Controllers\productController::class,'get_product_value']
    )->name('get-product-json');

    //AJAX產品類別(編輯抓值)
    Route::get('/backstage/product_type/get/{id}',[App\Http\Controllers\productController::class,'get_product_type_value']
    )->name('get-product-type-json');

    //AJAX營業公司(編輯抓值)
    Route::get('/backstage/customer/business/get/{id}',[App\Http\Controllers\customerController::class,'get_business_value']
    )->name('get-business-json');

    //AJAX營業項目類別(編輯抓值)
    Route::get('/backstage/customer/business_type/get/{id}',[App\Http\Controllers\customerController::class,'get_business_type_value']
    )->name('get-business_type-json');

    //AJAX營業項目(編輯抓值)
    Route::get('/backstage/customer/business_item/get/{id}',[App\Http\Controllers\customerController::class,'get_business_item_value']
    )->name('get-business_item-json');

    //AJAX讀取數量
    Route::get('/backstage/get',[App\Http\Controllers\customerController::class,'get_nav_value']
    )->name('get-num-json');

   
    Route::get('/backstage/customer', function() {
        return view('backstage.backstage_main');
    })->name('backstage-customer');
});


