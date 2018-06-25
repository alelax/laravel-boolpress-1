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

Route::get('/', 'HomeController@index')->name('home.index');

//categories routes
Route::get('/admin/categorie', 'CategoryController@index')->name('categories.index');
Route::get('/admin/nuova-categoria', 'CategoryController@create')->name('categories.create');
Route::post('/admin/nuova-categoria', 'CategoryController@save')->name('categories.save');

//posts routes
Route::get('/admin/posts', 'PostController@index')->name('posts.index');
Route::get('/admin/nuovo-post', 'PostController@create')->name('posts.create');
Route::post('/admin/nuovo-post', 'PostController@save')->name('posts.save');

//People routes
Route::get('/persone', 'PersonController@index')->name('people.index');
