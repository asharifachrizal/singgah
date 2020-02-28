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

Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', 'UserController@login')->name('login');
    Route::get('/register', 'UserController@login')->name('register');
    Route::post('/login', 'UserController@postLogin')->name('postLogin');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/comin-soon', 'HomeController@comingSoon')->name('comingsoon');

Route::get('/product', 'ProductController@index')->name('product');
Route::get('/product/{slug}', 'ProductController@detail')->name('product.detail');

Route::group(['middleware' => 'visitor'], function() {
    Route::post('/logout', 'UserController@postLogout')->name('postLogout');

    Route::get('/cart', 'CartController@index')->name('cart');
    Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
    Route::post('/cart/add/{slug}', 'CartController@additem')->name('cart.additem');
});