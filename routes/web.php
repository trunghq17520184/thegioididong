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

    Route::get('logout', 'LoginController@getLogout')->name('auth.get.logout');

    Route::post('login', 'LoginController@postLoginForm');
    Route::get('reset', 'RegisterController@getRegisterForm')->name('password.request');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/danhmuc/{slug}-{id}', 'CategoryController@getlistProduct')->name('get.list.product');
Route::get('/sanpham/{slug}-{id}', 'ProductController@getdetailProduct')->name('get.detail.product');


Route::get('don-hang', 'ShoppingCartController@index')->name('get.shopping.index');
Route::prefix('shopping')->group(function () {
    Route::get('add/{id}', 'ShoppingCartController@add')->name('get.shopping.add');
    Route::get('delete/{id}', 'ShoppingCartController@delete')->name('get.shopping.delete');
    Route::get('update', 'ShoppingCartController@update')->name('get.shopping.update');

    Route::post('order', 'ShoppingCartController@order')->name('post.shopping.order');

});