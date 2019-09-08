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
    Route::delete('/experience/{id}', 'ExperienceController@destroy')->name('experience.delete');
    Route::get('/experience/edit/{id}', 'ExperienceController@edit')->name('experience.edit');
    Route::patch('/experience/{id}', 'ExperienceController@update')->name('experience.update');

    //education
    Route::Post('/education', 'EducationController@store')->name('education.store');
    Route::delete('/education/{id}', 'EducationController@destroy')->name('education.delete');
    Route::get('/education/edit/{id}', 'EducationController@edit')->name('education.edit');
    Route::patch('/education/{id}', 'EducationController@update')->name('education.update');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
