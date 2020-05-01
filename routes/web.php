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
Route::get('/faq', 'FaqController@clientIndex')->name('client.faq.index');
Route::view('/about-us', 'pages.about-us')->name('aboutUs');

Route::group(['middleware' => 'admin'], function() {
    Route::view('/cms/login', 'pages.cms.admin-login')->name('cms.login');
    Route::get('/cms', 'CMSController@dashboard')->name('cms.dashboard');
    Route::get('/cms/customer', 'CMSController@customer')->name('cms.customer');
    Route::get('/cms/order', 'OrderController@index')->name('cms.order');
    Route::post('/cms/order/modify/{invoice_id}',  'OrderController@updateOrder')->name('cms.modify.order');
    Route::get('/cms/order/detail/{invoice_id}', 'OrderController@orderDetail')->name('cms.order.detail');    

    Route::post('/cms/store', 'InvoiceController@store')->name('invoice.store');
    Route::get('/cms/order/invoice/{id}', 'InvoiceController@invoiceCMSDetail')->name('cms.invoice');
    Route::post('/cms/order/invoice/update/{id}', 'InvoiceController@invoiceCMSUpdate')->name('cms.invoice.update');
    Route::post('/cms/order/invoice/paid/{id}', 'InvoiceController@invoiceCMSPaid')->name('cms.invoice.paid');

    //Start FAQ
    Route::get('/cms/faq/list', 'FaqController@index')->name('cms.faq.list');
    Route::get('/cms/faq/form/add', 'FaqController@formAdd')->name('cms.faq.form.add');
    Route::get('/cms/faq/form/update/{id}', 'FaqController@formUpdate')->name('cms.faq.form.update');
    Route::post('/cms/faq/store', 'FaqController@store')->name('cms.faq.store');
    Route::post('/cms/faq/update/{id}', 'FaqController@update')->name('cms.faq.update');
    Route::get('/cms/faq/delete/{id}', 'FaqController@delete')->name('cms.faq.delete');
    //End FAQ

    //Start Coupon
    Route::get('/cms/coupon/list', 'CouponController@index')->name('cms.coupon.list');
    Route::get('/cms/coupon/form/add', 'CouponController@formAdd')->name('cms.coupon.form.add');
    Route::get('/cms/coupon/form/update/{id}', 'CouponController@formUpdate')->name('cms.coupon.form.update');
    Route::post('/cms/coupon/store', 'CouponController@store')->name('cms.coupon.store');
    Route::post('/cms/coupon/update/{id}', 'CouponController@update')->name('cms.coupon.update');
    Route::get('/cms/coupon/delete/{id}', 'CouponController@delete')->name('cms.coupon.delete');
    //End Coupon

    



});

Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', 'UserController@login')->name('login');
    Route::get('/register', 'UserController@register')->name('register');
    Route::post('/login', 'UserController@postLogin')->name('postLogin');
    Route::post('/storeRegister', 'RegisterController@registerStore')->name('register.store');    
});



Route::group(['middleware' => 'visitor'], function() {
    Route::post('/logout', 'UserController@postLogout')->name('postLogout');
    Route::get('/category', 'ProductController@index')->name('product');
    
    // START CART ROUTE
    Route::get('/cart', 'CartController@cartClient')->name('cartUser');
    Route::get('/cart/{id}', 'CartController@delete')->name('cart.delete');
    Route::get('/listcart', 'CartController@cartList')->name('cart.list');
    
    // END CART ROUTE
    
    Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
    Route::post('/cart/add', 'CartController@additem')->name('cart.additem');
    
    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::post('/profile/{id}', 'UserController@registerUpdate')->name('registerUpdate');
    Route::post('/order/{id}', 'CartController@addOrder')->name('tambahOrder');
    Route::get('/my-order/{id}', 'CartController@myOrder')->name('myorder');
    Route::get('/invoice/detail/{id}', 'InvoiceController@invoiceClient')->name('invoice.detail');
    Route::post('/invoice/reject/{id}', 'InvoiceController@invoiceReject')->name('invoice.reject');
    
    Route::get('/product/select-product/{slug}/{id}', 'ProductController@selectProduct')->name('product.select');
    Route::get('/product/my-order/{id}', 'ProductController@order')->name('productOrder');
    
    // UPLOAD FILE
    Route::post('/upload/brief', 'UploadController@upload_brief')->name('uploadBrief');
    Route::post('/delete/file', 'UploadController@delete_file' )->name('deleteFile');
    Route::get('/download/brief/{file_name}', 'UploadController@download_brief' )->name('downloadBrief');
});
