<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceOrder within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::resource('dashboard/product','Dashboard\ProductController');
//Route::get('dashboard/provider', 'Dashboard\ProviderController@index');

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'Dashboard\DashboardController@index')->middleware('auth');

Route::get('dashboard', 'Dashboard\DashboardController@index')->middleware('auth');

Route::get('dashboard/company', 'Dashboard\CompanyController@index')->name('company.index')->middleware('auth');
Route::get('dashboard/company/create', 'Dashboard\CompanyController@create')->name('company.create')->middleware('auth');
Route::post('dashboard/company/store', 'Dashboard\CompanyController@store')->name('company.store')->middleware('auth');

Route::get('dashboard/customer', 'Dashboard\CustomerController@index')->name('customer.index')->middleware('auth');
Route::get('dashboard/customer/create', 'Dashboard\CustomerController@create')->name('customer.create')->middleware('auth');
Route::post('dashboard/customer/store', 'Dashboard\CustomerController@store')->name('customer.store')->middleware('auth');

Route::get('dashboard/product', 'Dashboard\ProductController@index')->name('product.index')->middleware('auth');
Route::get('dashboard/product/create', 'Dashboard\ProductController@create')->name('product.create')->middleware('auth');
Route::post('dashboard/product/store', 'Dashboard\ProductController@store')->name('product.store')->middleware('auth');

Route::get('dashboard/provider', 'Dashboard\ProviderController@index')->name('provider.index')->middleware('auth');
Route::get('dashboard/provider/create', 'Dashboard\ProviderController@create')->name('provider.create')->middleware('auth');
Route::post('dashboard/provider/store', 'Dashboard\ProviderController@store')->name('provider.store')->middleware('auth');

Route::get('dashboard/order', 'Dashboard\OrderController@index')->name('order.index')->middleware('auth');
Route::get('dashboard/order/create', 'Dashboard\OrderController@create')->name('order.create')->middleware('auth');
Route::post('dashboard/order/store', 'Dashboard\OrderController@store')->name('order.store')->middleware('auth');



Auth::routes();

//Route::get('/home', 'HomeController@index');
