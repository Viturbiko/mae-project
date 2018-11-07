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

Route::get('/calendar', 'IndexController@calendar')->name('calendar');

Route::post('/contact', 'ContactController@store')->name('contact');

Route::get('/download1', 'DownloadsController@DownloadFile1')->name('downloadfile1');
Route::get('/download2', 'DownloadsController@DownloadFile2')->name('downloadfile2');
Route::get('/download3', 'DownloadsController@DownloadFile3')->name('downloadfile3');
Route::get('/download4', 'DownloadsController@DownloadFile4')->name('downloadfile4');

