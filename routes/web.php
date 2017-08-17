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
    return view('welcome');
});


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@getRegister')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('roles', 'RoleController');
Route::resource('constituents', 'ConstituentController');
Route::resource('shehias', 'ShehiaController');
Route::resource('words', 'WordController');
Route::resource('voters', 'VoterController');
Route::resource('pollings', 'PollingController');

Route::get('listshehia', 'ShehiaController@getShehiaList');
Route::get('listpolling', 'PollingController@getPollingList');
Route::get('voters/{id}/votersList', 'VoterController@votersList');
Route::get('voters/{id}/votersListword', 'VoterController@votersListWord');
