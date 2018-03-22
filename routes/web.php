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

