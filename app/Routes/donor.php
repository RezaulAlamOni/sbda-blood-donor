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
Route::get('/register', 'Auth\RegisterController@register')->name('donor.register');
Route::get('/auth-check', 'DonorController@authCheck')->name('auth.check');

//Route::get('/', 'HomeController@index')->name('home');



// blood group
Route::get('/blood-groups','BloodGroupController@index')->name('blood_group');
// member areas
Route::get('/member-areas','VolunteerAreaController@index')->name('member.areas');

Route::get('/photos/{type}','PhotoController@index');
