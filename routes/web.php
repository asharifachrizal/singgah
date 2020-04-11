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
Route::view('/cms/login', 'pages.cms.admin-login')->name('cms.login');
Route::view('/cms', 'pages.cms.dashboard')->name('cms.dashboard');
Route::get('/cms/customer', 'UserController@index')->name('cms.customer');
Route::get('/cms/cart', 'CartController@index')->name('cms.cart');
Route::get('/cms/cart/detail', 'CartController@detail')->name('cms.cart.detail');


Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', 'UserController@login')->name('login');
    Route::get('/register', 'UserController@register')->name('register');
    Route::post('/login', 'UserController@postLogin')->name('postLogin');
    Route::post('/storeRegister', 'RegisterController@registerStore')->name('register.store');
});

// new route

Route::get('/new', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/coming-soon', 'HomeController@comingSoon')->name('comingsoon');

Route::get('/kategori', 'CategoryController@index')->name('category');
Route::get('/kategori/{slug}', 'CategoryController@detail')->name('category.detail');

Route::get('/produk', 'ProductController@index')->name('product');
Route::get('/produk/order', 'ProductController@order')->name('productOrder');
Route::get('/produk/select-product/{slug}/{category_id}', 'ProductController@selectProduct')->name('product.select');
Route::get('/produk/detail', 'ProductController@detailProduct')->name('product.detail');
// Route::get('/produk/desain-produksi', 'ProductController@produksi')->name('produksi');
// Route::get('/produk/desain-non-produksi', 'ProductController@nonproduksi')->name('nonproduksi');
// Route::get('/produk/desain-video', 'ProductController@video')->name('video');


Route::get('/promo', 'PromoController@index')->name('promo');


Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/about-us', 'HomeController@aboutUs')->name('aboutUs');

// Route::get('/about-us', 'HomeController@aboutUs')->name('aboutUs');

Route::group(['middleware' => 'visitor'], function() {
    Route::post('/logout', 'UserController@postLogout')->name('postLogout');

    Route::get('/keranjang', 'CartController@index')->name('cart');
    Route::get('/keranjang/pembayaran', 'CartController@checkout')->name('cart.checkout');
    Route::post('/keranjang/tambah/{slug}', 'CartController@additem')->name('cart.additem');

    Route::get('/pengaturan', 'UserController@setting')->name('user.setting');
});
