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


Auth::routes();

Route::get('/contact', 'ContactFormController@create')->name('contact.create');
Route::post('/contact', 'ContactFormController@store')->name('contact.store');

Route::view('/about', 'about')->middleware('test');

//Route::get('customers', 'CustomersController@index')->name('customers.index');
//Route::get('customers/create', 'CustomersController@create')->name('customers.create');
//Route::post('customers', 'CustomersController@store')->name('customers.store');
//Route::get('customers/{customer}', 'CustomersController@show')->middleware('can:view, customer');
//Route::get('customers/{customer}/edit', 'CustomersController@edit')->name('customers.edit');
//Route::patch('customers/{customer}', 'CustomersController@update')->name('customers.update');
//Route::delete('customers/{customer}', 'CustomersController@destroy')->name('customers.destroy');

Route::resource('customers', 'CustomersController')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
