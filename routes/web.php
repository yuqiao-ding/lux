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

Route::prefix('home')->group(function () {
    Route::get('index', 'UsersInfoController@index');
    Route::post('plus', 'UsersInfoController@plus');
    Route::post('delete', 'UsersInfoController@delete');
    Route::post('update', 'UsersInfoController@update');
});
Route::resource('index', 'UsersInfoController');
Route::resource('plus', 'UsersInfoController');
Route::resource('delete', 'UsersInfoController');
Route::resource('update', 'UsersInfoController');