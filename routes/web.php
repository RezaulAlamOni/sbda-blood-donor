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


Route::group(['prefix'=>'admin'], function(){
    Route::get('/', ['as' => 'index', 'uses' => 'AccountController@index']);
//    Route::get( '/{vue_route?}', 'HomeController@Default_vue' )->where( 'vue_route', '(.*)' );
});

Route::get( '/{vue_route?}', 'HomeController@Default_vue' )->where( 'vue_route', '(.*)' );

