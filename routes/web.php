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
    return view('welcome');
});

Route::get('/contact', 'PagesController@contact');
Route::get('/about' , 'PagesController@about');

/*Route::post('/videos', 'VideosControler@store');
Route::get('/videos', 'VideosControler@index');
Route::get('/videos/create', 'VideosControler@create');
Route::get('/videos/{id}', 'VideosControler@show');*/

Route::resource('videos', 'VideosControler');
