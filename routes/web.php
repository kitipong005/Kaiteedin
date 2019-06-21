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

Route::get('/', function () {
    return view('index');
});

// ========================== Login with facebook ====================
Route::get('login/facebook', 'LoginController@redirectToProviderFacebook');
Route::get('login/facebook/callback', 'LoginController@handleProviderCallbackFacebook');
// ========================== Login with google ====================
Route::get('login/google', 'LoginController@redirectToProviderGoogle');
Route::get('login/google/callback', 'LoginController@handleProviderCallbackGoogle');
// ========================== Login with website ====================
Route::post('login/website', 'LoginController@Login');
// ========================== Regis with Web ====================
Route::post('register/website', 'RegisterController@register');
Route::get('register/checkEmail', 'RegisterController@checkEmailExists');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
