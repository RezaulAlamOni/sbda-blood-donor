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


Route::get('/donor', 'DonorController@index')->name('donor');
Route::get('/login', 'Auth\DonorLoginController@showLoginForm')->name('donor.login');

Route::get('/blood-groups','BloodGroupController@index')->name('blood_group');