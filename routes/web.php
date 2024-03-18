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

Route::group(['namespace' => 'Quest'], function () {
    Route::get('/', 'IndexController')->name('quest.index');
    Route::post('/user', 'UserController')->name('quest.user');
    Route::get('/{quest}', 'ShowController')->name('quest.show');
    Route::post('/{quest}/', 'CheckController')->name('quest.check');
    Route::post('/', 'StoreController')->name('quest.store');
});
