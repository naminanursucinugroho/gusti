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
    return view('index');
});

Route::get('1', function () {
    return view('home');
});
Route::get('2', function () {
    return view('profil');
});
Route::get('3', function () {
    return view('about');
});

Route::get('4',function() {
	return view('Gallery');
});
Route::get('Cover',function() {
	return view('cov');
});
Route::get('Ho',function() {
	return view('halde');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
