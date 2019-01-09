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

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/home', 'HomeController@dashboard')->name('dashboard');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/transactions', 'TransactionController@transactions')->name('transactions');
Route::get('/deposit', 'DepositController@deposit')->name('deposit');
Route::get('/viewreferral', 'ReferralController@viewreferral')->name('viewreferral');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/admin/login', 'Auth\LoginController@adminlogin')->name('adminlogin');

Route::post('/buycoin', 'DepositController@buycoin')->name('buycoin');


Route::match(array('get', 'post'), 'api/test', 'ApiController@test')->name('test');
