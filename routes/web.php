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
    return view('layouts.main');
});
Route::get('/logout', 'Auth\LoginController@logout');

Route::middleware(['auth'])->group(function () {
    //main
    Route::get('/edit', 'MainController@index')->name('mainedit');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
