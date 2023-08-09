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

// Creates the login Route and when the login route is requested it accesses the login function of the HomeController
Route::get('login', 'App\Http\Controllers\HomeController@login');
Route::get('forgot', 'App\Http\Controllers\HomeController@forgot');