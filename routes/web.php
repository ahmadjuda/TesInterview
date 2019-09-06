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
//Periode
Route::get('/', 'PeriodeController@index');
Route::get('periode/add', 'PeriodeController@create');
Route::post('periode/add', 'PeriodeController@store');

Route::get('periode/{id}/edit', 'PeriodeController@edit');
Route::patch('periode/{id}/edit', 'PeriodeController@update');
Route::delete('periode/{id}/delete', 'PeriodeController@destroy');

//JProduk
Route::get('jproduk', 'JProdukController@index');
Route::get('jproduk/add', 'JProdukController@create');
Route::post('jproduk/add', 'JProdukController@store');

Route::get('jproduk/{id}/edit', 'JProdukController@edit');
Route::patch('jproduk/{id}/edit', 'JProdukController@update');
Route::delete('jproduk/{id}/delete', 'JProdukController@destroy');

//Jabatan
Route::get('jabatan', 'JabatanController@index');
Route::get('jabatan/add', 'JabatanController@create');
Route::post('jabatan/add', 'JabatanController@store');

Route::get('jabatan/{id}/edit', 'JabatanController@edit');
Route::patch('jabatan/{id}/edit', 'JabatanController@update');
Route::delete('jabatan/{id}/delete', 'JabatanController@destroy');

//Karyawan
Route::get('karyawan', 'KaryawanController@index');
Route::get('karyawan/add', 'KaryawanController@create');
Route::post('karyawan/add', 'KaryawanController@store');

Route::get('karyawan/{id}/edit', 'KaryawanController@edit');
Route::patch('karyawan/{id}/edit', 'KaryawanController@update');
Route::delete('karyawan/{id}/delete', 'KaryawanController@destroy');

//Produk
Route::get('produk', 'ProdukController@index');
Route::get('produk/add', 'ProdukController@create');
Route::post('produk/add', 'ProdukController@store');

Route::get('produk/{id}/edit', 'ProdukController@edit');
Route::patch('produk/{id}/edit', 'ProdukController@update');
Route::delete('produk/{id}/delete', 'ProdukController@destroy');

//Bangunan
Route::get('bangunan', 'BangunanController@index');
Route::get('bangunan/add', 'BangunanController@create');
Route::post('bangunan/add', 'BangunanController@store');

Route::get('bangunan/{id}/edit', 'BangunanController@edit');
Route::patch('bangunan/{id}/edit', 'BangunanController@update');
Route::delete('bangunan/{id}/delete', 'BangunanController@destroy');