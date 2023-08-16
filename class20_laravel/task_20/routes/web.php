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

Route::get('home', 'App\Http\Controllers\HomeController@viewHome')->middleware('isLoggedIn');
Route::get('login', 'App\Http\Controllers\HomeController@index');
Route::post('login', 'App\Http\Controllers\HomeController@login');
Route::get('logout', 'App\Http\Controllers\HomeController@logout');
Route::get('changePass', 'App\Http\Controllers\HomeController@newPass')->middleware('isLoggedIn');
Route::post('changePass', 'App\Http\Controllers\HomeController@updatePass');
