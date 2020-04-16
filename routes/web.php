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


Route::view('/', 'pages.home')->name('home');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/about-us', 'pages.about-us')->name('aboutUs');

Route::group(['middleware' => 'admin'], function() {
    Route::view('/cms/login', 'pages.cms.admin-login')->name('cms.login');
    Route::view('/cms', 'pages.cms.dashboard')->name('cms.dashboard');
    Route::get('/cms/customer', 'UserController@indexCustomer')->name('cms.customer');
    Route::get('/cms/order', 'OrderController@index')->name('cms.order');
    Route::view('/cms/order/detail', 'pages.cms.order-detail')->name('cms.order.detail');
    Route::view('/cms/order/invoice', 'pages.cms.invoice')->name('cms.invoice');

});

Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', 'UserController@login')->name('login');
    Route::get('/register', 'UserController@register')->name('register');
    Route::post('/login', 'UserController@postLogin')->name('postLogin');
    Route::post('/storeRegister', 'RegisterController@registerStore')->name('register.store');
    Route::view('/profile', 'pages.profile')->name('profile');
});


Route::group(['middleware' => 'visitor'], function() {
    Route::post('/logout', 'UserController@postLogout')->name('postLogout');
    Route::get('/category', 'ProductController@index')->name('product');
    Route::get('/cart', 'CartController@cartClient')->name('cartUser');
    Route::get('/keranjang', 'CartController@index')->name('cart');
    Route::get('/keranjang/pembayaran', 'CartController@checkout')->name('cart.checkout');
    Route::post('/keranjang/tambah', 'CartController@additem')->name('cart.additem');
    Route::get('/produk/order', 'ProductController@order')->name('productOrder');    
    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::post('/profile/{id}', 'UserController@registerUpdate')->name('registerUpdate');
    Route::post('/order/{id}', 'CartController@addOrder')->name('tambahOrder');
    Route::get('/my-order/{id}', 'CartController@myOrder')->name('myorder');
    Route::get('/my-order/detail/{id}', 'CartController@detailOrder')->name('detailOrder');

    //Punya Akbar
    Route::view('/product/select-product', 'pages.product.selectCategory')->name('forSelectCategory');
    Route::view('/product/my-order', 'pages.product.myOrder')->name('forMyOrder');
});
