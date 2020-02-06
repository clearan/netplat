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


//Route::get('/login', 'WxPay\LoginController@login');
//Route::get('/main', 'WxPay\MainController@main');
Route::group(['namespace'=>'WxPay'],function () {
   // Route::match(array('GET', 'POST'), '/', 'LoginController@login');
    Route::match(array('GET', 'POST'), '/', 'LoginController@login');
    Route::get('/main', 'MainController@main');
    Route::get('/main/pay', 'PayController@main');
});
