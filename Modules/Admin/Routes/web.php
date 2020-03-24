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

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AdminCategoryController;
use Modules\Admin\Http\Controllers\AdminPostController;

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.index');

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'AdminCategoryController@index')->name('admin.get.category');
        Route::post('/', 'AdminCategoryController@store');
        Route::get('/{action}/{id}', 'AdminCategoryController@action')->name('admin.get.action.category');
        Route::post('/edit/{id}', 'AdminCategoryController@update');
    });
    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'AdminProductController@index')->name('admin.get.product');
        Route::get('/create', 'AdminProductController@create')->name('admin.get.create.product');
        Route::post('/create', 'AdminProductController@insert');
        Route::get('/{action}/{id}', 'AdminProductController@action')->name('admin.get.action.product');
        Route::post('/edit/{id}', 'AdminProductController@update');
    });
    Route::group(['prefix' => 'post'], function () {
        Route::get('/', 'AdminPostController@index')->name('admin.get.post');
        Route::get('/create', 'AdminPostController@create')->name('admin.get.create.post');
        Route::post('/create', 'AdminPostController@insert');
    });
    Route::group(['prefix' => 'slider'], function () {
        Route::get('/', 'AdminSliderController@index')->name('admin.get.slider');
        Route::post('/', 'AdminSliderController@store');
        Route::get('/{action}/{id}', 'AdminSliderController@action')->name('admin.get.action.slider');
    });
    Route::group(['prefix' => 'images'], function () {
        Route::get('/', 'AdminImageController@index')->name('admin.get.image');
        Route::post('/', 'AdminImageController@store');
        Route::get('/{action}/{id}', 'AdminImageController@action')->name('admin.get.action.image');
    });
});
