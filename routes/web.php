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

Route::view('/cms', 'layouts.mk-cms');
Route::get('/cms/transaction', 'CMSController@transaction')->name('transaction');
Route::get('/cms/order', 'CMSController@order')->name('order');

Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', 'UserController@login')->name('login');
    Route::get('/register', 'UserController@login')->name('register');
    Route::post('/login', 'UserController@postLogin')->name('postLogin');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/coming-soon', 'HomeController@comingSoon')->name('comingsoon');

Route::get('/kategori', 'CategoryController@index')->name('category');
Route::get('/kategori/{slug}', 'CategoryController@detail')->name('category.detail');

Route::get('/produk', 'ProductController@index')->name('product');
Route::get('/p/{category}/{slug}', 'ProductController@detail')->name('product.detail');

Route::get('/promo', 'PromoController@index')->name('promo');


Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/tentang-kami', 'HomeController@aboutUs')->name('aboutUs');

Route::get('/tentang-kami', 'HomeController@aboutUs')->name('aboutUs');

Route::group(['middleware' => 'visitor'], function() {
    Route::post('/logout', 'UserController@postLogout')->name('postLogout');

    Route::get('/keranjang', 'CartController@index')->name('cart');
    Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
    Route::post('/cart/add/{slug}', 'CartController@additem')->name('cart.additem');

    Route::get('/pengaturan', 'UserController@setting')->name('user.setting');
});