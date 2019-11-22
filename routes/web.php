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

//Route::get('/', function () {
//    return view('layouts.master');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function (){
    Route::get('/', 'AdminController@index')->name('admin');
});
Route::prefix('donor')->group(function (){

    Route::get('/', 'DonorController@index')->name('donor');
    Route::get('/login', 'Auth\DonorLoginController@showLoginForm')->name('donor.login');
});

