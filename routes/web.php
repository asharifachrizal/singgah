<?php

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

// Route::view('/cms', 'layouts.mk-cms')->name('cms.dashboard');
Route::view('/cms', 'pages.cms.dashboard')->name('cms.dashboard');
Route::get('/cms/customer', 'UserController@index')->name('cms.customer');
Route::get('/cms/order', 'CMSController@order')->name('cms.order');
Route::get('/cms/order/detail', 'CMSController@orderDetail')->name('cms.order.detail');
// Route::get('/cms/custom', 'CMSController@customers')->name('cms.customers');
Route::get('/cms/transaction', 'CMSController@transaction')->name('transaction');
Route::get('/cms/order', 'CMSController@order')->name('order');
Route::get('/cms/product/list', 'CMSController@productList')->name('product.list');
Route::get('/cms/product/add', 'CMSController@addProduct')->name('product.add');

Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', 'UserController@login')->name('login');
    Route::get('/daftar', 'UserController@login')->name('register');
    Route::post('/login', 'UserController@postLogin')->name('postLogin');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/coming-soon', 'HomeController@comingSoon')->name('comingsoon');

Route::get('/kategori', 'CategoryController@index')->name('category');
Route::get('/kategori/{slug}', 'CategoryController@detail')->name('category.detail');

Route::get('/produk', 'ProductController@index')->name('product');
Route::get('/produk/select-product/{slug}/{category_id}', 'ProductController@selectProduct')->name('product.select');
Route::get('/produk/detail', 'ProductController@detail')->name('product.detail');
// Route::get('/produk/desain-produksi', 'ProductController@produksi')->name('produksi');
// Route::get('/produk/desain-non-produksi', 'ProductController@nonproduksi')->name('nonproduksi');
// Route::get('/produk/desain-video', 'ProductController@video')->name('video');


Route::get('/promo', 'PromoController@index')->name('promo');


Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/tentang-kami', 'HomeController@aboutUs')->name('aboutUs');

Route::get('/tentang-kami', 'HomeController@aboutUs')->name('aboutUs');

Route::group(['middleware' => 'visitor'], function() {
    Route::post('/logout', 'UserController@postLogout')->name('postLogout');

    Route::get('/keranjang', 'CartController@index')->name('cart');
    Route::get('/keranjang/pembayaran', 'CartController@checkout')->name('cart.checkout');
    Route::post('/keranjang/tambah/{slug}', 'CartController@additem')->name('cart.additem');

    Route::get('/pengaturan', 'UserController@setting')->name('user.setting');
});
