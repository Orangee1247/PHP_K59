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
Route::get('/aboutus', 'PagesController@aboutus');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');
Route::get('/home','PagesController@home');
Route::get('/services','PagesController@services');
Route::get('/news','PagesController@news');
Route::get('/blog','PagesController@blog');


Route::get('/articles/index','ArticlesController@index');
Route::get('/articles/create','ArticlesController@create');
Route::post('/articles', 'ArticlesController@store');

Route::get('/', function () {
    return view('welcome');
    });

