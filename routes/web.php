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

Route::get('/', 'StatikController@index');

Route::get('/tarif/{id}', 'StatikController@tarif');

Route::get('/hakkimda', 'StatikController@hakkimda');
Route::get('/iletisim', 'StatikController@iletisim');

Auth::routes();

Route::get('/home', 'StatikController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );


Route::get('/admin', 'Admin\AdminController@index');


Route::get('/admin/tarifler', 'Admin\TariflerController@tarifler');

Route::get('/admin/tarifEkle', 'Admin\TariflerController@tarifEkle');
Route::post('/admin/tarifEklePost', 'Admin\TariflerController@tarifEklePost');

Route::get('/admin/tarifDuzenle/{id}', 'Admin\TariflerController@tarifDuzenle');
Route::post('/admin/tarifDuzenlePost/{id}', 'Admin\TariflerController@tarifDuzenlePost');

Route::get('/admin/tarifSil/{id}', 'Admin\TariflerController@tarifSil');

Route::get('/tarifler', 'YemekTarifleriController@tarifler');
Route::get('/tarifEkle', 'YemekTarifleriController@tarifEkle');
Route::post('/tarifEklePost', 'YemekTarifleriController@tarifEklePost');
Route::get('/tarifDuzenle/{id}', 'YemekTarifleriController@tarifDuzenle');
Route::post('/tarifDuzenlePost/{id}', 'YemekTarifleriController@tarifDuzenlePost');
Route::get('/tarifSil', 'YemekTarifleriController@tarifSil');

Route::get('/kategori/{slug}', 'YemekTarifleriController@category');

Route::get('/admin/categories', 'Admin\CategoryController@categories');
Route::get('/admin/category/create', 'Admin\CategoryController@create');
Route::post('/admin/category/store', 'Admin\CategoryController@store');
Route::get('/admin/category/edit/{id}', 'Admin\CategoryController@edit');
Route::post('/admin/category/update/{id}', 'Admin\CategoryController@update');
Route::get('/admin/category/delete/{id}', 'Admin\CategoryController@delete');

