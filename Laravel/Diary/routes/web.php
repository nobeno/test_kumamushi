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

Route::get('/', 'DiaryController@index')->name('diary.index');
Route::get('/create', 'DiaryController@create')->name('diary.create');
Route::post('/create', 'DiaryController@store')->name('diary.create');