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

Route::get('admin_login', function () {
    return view('admin_login');
})->middleware('auth:admin');

Route::get('seller_login', function () {
    return view('seller_login');
})->middleware('auth:seller');

Route::get('berandauser', function() {
	return view('berandauser');
})->middleware('auth:seller');

Route::get('upload_katalog', function() {
	return view('upload_katalog');
})->middleware('auth:seller');

Route::get('masuk', function () {
    return view('masuk');
})->middleware('guest');

Route::post('/kirimdata', 'login@masuk');

Route::post('login', [ 'as' => 'login', 'uses' => 'login@masuk']);


Route::get('/keluar', 'login@keluar');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
