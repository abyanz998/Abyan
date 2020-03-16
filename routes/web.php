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
use App\Chef; // memanggil model chef jadi pakai eloquent
use App\Menu; // memanggil model Gambar jadi pakai eloquent

Route::get('/', function () {
  $menu = Menu::find([1]);
    $menu2 = Menu::find([2]);
     $menu3 = Menu::find([3]);

  return view('welcome', compact('menu','menu2','menu3'));
});

Route::get('/menu',function () {
  $menus = Menu::all();
  return view('menus', compact('menus'));
});

Route::get('beli/{id}',function ($id)
{
  $belis = Menu::find($id);
  return view('beli', compact('belis'));
});

Route::post('beli/{id}',
'CrudController@beli');


Auth::routes();

Route::get('/home',
'HomeController@index')->name('index'); // home itu = /login diarahkan ke login tapi buka web

Route::get('/chef',
'HomeController@chef')->middleware('auth'); // untuk lihat semua data chefnya

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

Route::get('/pesanan',
'HomeController@pesanan')->middleware('auth');

Route::get('/chef/export_excel', 'ChefController@export_excel'); // membuat export excel nya
