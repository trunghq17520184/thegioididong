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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'Auth'],function(){
    Route::get('register', 'RegisterController@getRegisterForm')->name('auth.get.registerform');

    Route::post('register', 'RegisterController@postRegisterForm');
    Route::get('login', 'LoginController@getLoginForm')->name('auth.get.loginform');
    Route::post('login', 'LoginController@postLoginForm');
    Route::get('reset', 'RegisterController@getRegisterForm')->name('password.request');


});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/danhmuc/{slug}-{id}', 'CategoryController@getlistProduct')->name('get.list.product');
Route::get('/sanpham/{slug}-{id}', 'ProductController@getdetailProduct')->name('get.detail.product');