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

Route::any('/tour-register','TourBookingController@index');
Route::post('/tour-save','TourBookingController@save')->name('tour-save');
Route::get('/tour-show','TourBookingController@show')->name('tour-show');