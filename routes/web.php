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
Route::get('/add-cuurencies', 'App\Http\Controllers\CurrencyController@add')->name('addCuurrency');

Route::group(['middleware' => 'guest'], function(){
    Route::get('/login', 'App\Http\Controllers\UserController@showLogin')->name('login');
    Route::post('/login', 'App\Http\Controllers\UserController@postLogin')->name("postLogin");
    Route::get('/sign-up', 'App\Http\Controllers\UserController@showSignUp')->name('signUp');
    Route::post('/sign-up', 'App\Http\Controllers\UserController@postSignup')->name('postSignup');
    Route::get('/forget-password', 'App\Http\Controllers\UserController@showForget')->name('forget');
    Route::post('/forget-password', 'App\Http\Controllers\UserController@postForgotPassword')->name('postForgotPassword');
    Route::get('/change-password/{email}/{token}', 'App\Http\Controllers\UserController@showChangePassword')->name('ChangePassword');
    Route::post('/change-password', 'App\Http\Controllers\UserController@postchangePasssword')->name('postchangePasssword');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', 'App\Http\Controllers\CustomerDashboardController@showDashboard')->name('cust.dashboard');
    Route::get('/profile', 'App\Http\Controllers\ProfileController@showProfile')->name('show.profile');
    Route::post('/profile', 'App\Http\Controllers\ProfileController@postProfile')->name('post.profile');
    Route::get('/send-funds', 'App\Http\Controllers\TransactionsController@showFunds')->name('send.funds');
    Route::post('/send-funds', 'App\Http\Controllers\TransactionsController@postTransaction')->name('post.transaction');
    Route::get('/transactions', 'App\Http\Controllers\TransactionsController@showTransaction')->name('show.transaction');
    Route::post('/verify', 'App\Http\Controllers\UserController@verifyEmail')->name('verifyEmail');
    Route::get('email/verify/{id}/{hash}', 'App\Http\Controllers\UserController@confirmEmail')->name('verification.verify');


    Route::get('logout','App\Http\Controllers\UserController@Logout')->name('logout');
});