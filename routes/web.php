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
Route::get('register', 'JobSeeker\Auth\RegisterController@index')->middleware('guest');
Route::post('register', 'JobSeeker\Auth\RegisterController@store')->middleware('guest')->name('register');


Route::get('login', 'JobSeeker\Auth\LoginController@index')->middleware('guest')->name('login');
Route::post('login', 'JobSeeker\Auth\LoginController@login')->middleware('guest')->name('login');
Route::post('logout', 'JobSeeker\Auth\LoginController@logout')->middleware('auth')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
