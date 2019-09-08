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

// Route::get('/', function () {
//     return view('layouts.main');
// });
Route::get('/', 'ShowController@index')->name('show');
Route::get('/logout', 'Auth\LoginController@logout');

Route::middleware(['auth'])->group(function () {
    //main
    Route::get('/edit', 'MainController@index')->name('main.edit');

    //experience
    Route::Post('/experience', 'ExperienceController@store')->name('experience.store');

    //education
    Route::Post('/education', 'EducationController@store')->name('education.store');
    Route::delete('/education/{id}', 'EducationController@destroy')->name('education.delete');
    Route::get('/education/edit/{id}', 'EducationController@edit')->name('education.edit');
    Route::patch('/education/{id}', 'EducationController@update')->name('education.update');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
