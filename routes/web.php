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


Route::get('/', 'App\Http\Controllers\WebController@index')->name('home');
Route::get('/about', 'App\Http\Controllers\WebController@about')->name('about');
Route::get('/contact', 'App\Http\Controllers\WebController@contact')->name('contact');
Route::get('/faqs', 'App\Http\Controllers\WebController@faqs')->name('faqs');


Route::get('/login', 'App\Http\Controllers\UserController@showLogin')->name('login');
Route::get('/sign-up', 'App\Http\Controllers\UserController@showSignUp')->name('signUp');
Route::get('/forget-password', 'App\Http\Controllers\UserController@showForget')->name('forget');
Route::get('/change-password/{email}/{token}', 'App\Http\Controllers\UserController@showChangePassword')->name('ChangePassword');
