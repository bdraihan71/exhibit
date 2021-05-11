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

    //testimonial
    Route::Post('/testimonial', 'TestimonialController@store')->name('testimonial.store');
    Route::delete('/testimonial/{id}', 'TestimonialController@destroy')->name('testimonial.delete');
    Route::get('/testimonial/edit/{id}', 'TestimonialController@edit')->name('testimonial.edit');
    Route::patch('/testimonial/{id}', 'TestimonialController@update')->name('testimonial.update');

    //skill
    Route::Post('/skill', 'SkillController@store')->name('skill.store');
    Route::delete('/skill/{id}', 'SkillController@destroy')->name('skill.delete');
    Route::get('/skill/edit/{id}', 'SkillController@edit')->name('skill.edit');
    Route::patch('/skill/{id}', 'SkillController@update')->name('skill.update');

    //profile
    Route::patch('/profile', 'ProfileController@update')->name('profile.update');

    //project
    Route::Post('/project', 'ProjectController@store')->name('project.store');
    Route::delete('/project/{id}', 'ProjectController@destroy')->name('project.delete');
    Route::get('/project/edit/{id}', 'ProjectController@edit')->name('project.edit');
    Route::patch('/project/{id}', 'ProjectController@update')->name('project.update');

    //footer
    Route::patch('/footer', 'FooterController@update')->name('footer.update');

    //contact
    Route::patch('/contact', 'ContactController@update')->name('contact.update');

    //Password
    Route::get('/password', 'ProfileController@getPassword')->name('password.get');
    Route::patch('/password', 'ProfileController@newUpdatePassword')->name('password.newpassword');

    //contact
    Route::get('/mail', 'ContactController@showAll')->name('contact.showall');

    


});

//contact
Route::post('/contact-us', 'ContactController@mail')->name('contact.mail');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

//article
Route::get('/article', 'ArticlesController@index')->name('article.index');
Route::get('/article/create', 'ArticlesController@create')->name('article.create');
Route::post('/article', 'ArticlesController@save')->name('article.save');

Route::get('/article/{article}/edit', 'ArticlesController@edit')->name('article.edit');
Route::post('/article/{article}', 'ArticlesController@update')->name('article.update');
Route::get('/article/{article}/delete', 'ArticlesController@delete')->name('article.delete');

//podcast

Route::get('/podcast', 'PodcastsController@index')->name('podcast.index');
Route::get('/podcast/create', 'PodcastsController@create')->name('podcast.create');
Route::post('/podcast', 'PodcastsController@save')->name('podcast.save');

Route::get('/podcast/{podcast}/edit', 'PodcastsController@edit')->name('podcast.edit');
Route::post('/podcast/{podcast}', 'PodcastsController@update')->name('podcast.update');
Route::get('/podcast/{podcast}/delete', 'PodcastsController@delete')->name('podcast.delete');


//other media

Route::get('/othermedia', 'OtherMediaController@index')->name('othermedia.index');
Route::get('/othermedia/create', 'OtherMediaController@create')->name('othermedia.create');
Route::post('/othermedia', 'OtherMediaController@save')->name('othermedia.save');

Route::get('/othermedia/{podcast}/edit', 'OtherMediaController@edit')->name('othermedia.edit');
Route::post('/othermedia/{podcast}', 'OtherMediaController@update')->name('othermedia.update');
Route::get('/othermedia/{podcast}/delete', 'OtherMediaController@delete')->name('othermedia.delete');


Route::get('/see-image', 'ShowController@seeImage')->name('see-image');