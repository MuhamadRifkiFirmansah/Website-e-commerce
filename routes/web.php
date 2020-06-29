<?php

use Illuminate\Support\Facades\Route;
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






// Women
Route::group(['prefix' => 'women'], function () {
    Route::get('/', 'WomenController@index');
    Route::get('/all', 'WomenController@index');
});
// Men
Route::group(['prefix' => 'men'], function () {
    Route::get('/', 'MenController@index');
    Route::get('/all', 'MenController@all');
    
});

// Kids
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'KidsController@index');
    Route::get('/all', 'KidsController@index');
    
});

// Index
Route::get('/', 'UserController@index');


Auth::routes();
Route::group(['middleware' => ['is_admin']], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/index', 'AdminController@index');
        Route::get('form', 'AdminController@create');
        Route::post('/index','AdminController@store');
        Route::get('form/{id_produk}', 'AdminController@edit');
        Route::put('/index/{id_produk}', 'AdminController@update');
        Route::get('delete/{id_produk}', 'AdminController@destroy');
    });
});

Route::get('/home', 'UserController@index')->name('home');
