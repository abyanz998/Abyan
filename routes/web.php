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

Auth::routes();

Route::get('/home',
'HomeController@index')->name('index'); // home itu = /login diarahkan ke login tapi buka web

Route::get('/chef',
'HomeController@chef')->middleware('auth');

Route::get('/chef/tambah',
'HomeController@tambah')->middleware('auth'); // diarahkan ke form penginputan

Route::post('/chef/store',
'CrudController@store')->middleware('auth'); //menangkap data dari form lalu diarahkan ke database untuk inputan

Route::get('/chef/edit/{id}',
'CrudController@edit')->middleware('auth'); //mengantar data ke form update

Route::put('/chef/update/{id}',
'CrudController@update')->middleware('auth'); //mengantar data ke form update

Route::get('/chef/delete/{id}',
'CrudController@delete')->middleware('auth'); //mengantar data ke form update

Route::get('/upload',
'CrudController@upload')->middleware('auth'); //mengupload file ke database

Route::post('/upload/proses',
'CrudController@proses_upload')->middleware('auth'); //mengantar data ke form update

Route::get('/upload/hapus/{id}',
'CrudController@hapus')->middleware('auth'); //mengantar data ke form update

Route::get('/statistik',
'HomeController@statistik')->middleware('auth');

Route::put('/statistik/update',
'CrudController@statistik_update')->middleware('auth');
