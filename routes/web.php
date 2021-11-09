<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginContoller;
use App\Http\Controllers\ProfileController;

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

Route::get('/about', 'App\Http\Controllers\AboutController@about');


Route::get('/login', 'App\Http\Controllers\LoginController@login');


Route::get('/register', 'App\Http\Controllers\RegisterController@register');

Route::get('/profile', 'App\Http\Controllers\ProfileController@DisplayProfile');



