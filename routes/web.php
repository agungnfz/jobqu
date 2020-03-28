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
Route::get('register', 'Auth\RegisterController@index')->middleware('guest');
Route::post('register', 'Auth\RegisterController@store')->middleware('guest')->name('register');


Route::get('login', 'Auth\LoginController@index')->middleware('guest')->name('login');
Route::post('login', 'Auth\LoginController@login')->middleware('guest')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->middleware('auth')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
