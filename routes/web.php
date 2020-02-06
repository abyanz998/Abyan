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

Route::get('/', function () {   //INI BUAT NGASIH URL YANG DIKETIK, karena sampai di / maka ini halaman home
return view('welcome');    // INI FUNGSINYA MANGGIL FOLDER view lalu nama filenya welcome
});

Route::get('home' ,
'homecontroller@index' );

Route::get('menu' ,
'homecontroller@menu' );

Route::get('about' ,
'homecontroller@about' );

Route::get('contact' ,
'homecontroller@contact' );

Route::get('table' ,
'homecontroller@table' );
