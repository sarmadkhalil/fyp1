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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('home');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('users', 'UserController');
    Route::resource('customers', 'CustomerController');
    Route::resource('inquiries', 'InquiryController');
    Route::resource('suppliers', 'SupplierController');
    Route::resource('products', 'ProductController');
    Route::resource('order', 'OrderController');
    Route::resource('audit', 'AuditController');
    Route::resource('salesquotes', 'SalesquoteController');
    Route::resource('profile', 'ProfileController@show');
    Route::get('/pdf', 'SalesquoteController@generatePDF')->name('generatePDF');
});

Auth::routes();