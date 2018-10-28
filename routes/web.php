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

Route::get('/', 'IndexController@index')->name('index');

Route::get('/about', 'IndexController@about')->name('about');

Route::get('/downloads', 'IndexController@downloads')->name('downloads');

Route::post('/contact', 'ContactController@store')->name('contact');

