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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('order_system','Admin\OrderController@index');
    Route::get('order_show/{id}','Admin\OrderController@show');
    Route::get('order_system/update/{id}','Admin\OrderController@change_status');

    // Dashboard
    Route::get('dashboard','Admin\DashboardController@index');
});