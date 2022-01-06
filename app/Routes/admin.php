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


Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.post');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    // Auth data for ajux

    Route::middleware('auth:admin')->group(function () {
        Route::get('/auth-data', 'AdminController@authData')->name('admin.auth');
        Route::get('/images/{type}', 'PhotoController@index')->name('admin.image');
        Route::post('/images-delete', 'PhotoController@destroy')->name('admin.image.delete');
        Route::post('/image-upload', 'PhotoController@store')->name('admin.image.upload');
        Route::post('/csv-upload', 'VolunteerController@store')->name('admin.csv.upload');
        Route::get('/users-type/{type}', 'VolunteerController@index')->name('admin.users.type');
    });


    Route::middleware('auth:admin')->group(function () {
        // vue router redirection
        Route::get('/{vue_route?}', 'AdminController@index')->where('vue_route', '(.*)');
//    Route::get('/', 'AdminController@index')->name('admin');
    });
});


