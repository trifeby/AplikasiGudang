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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'Stuff1Controller@home');

Route::get('/stuff', 'Stuff1Controller@index');

Route::get('/stuff/create', 'Stuff1Controller@create');
Route::get('/stuff/create2', 'Stuff1Controller@create2');
Route::post('/stuff/create', 'Stuff1Controller@save');

Route::get('/stuff/edit/{id}', 'Stuff1Controller@edit')->name('edit');
Route::post('/stuff/edit', 'Stuff1Controller@update');

Route::post('/stuff/tambah-jumlah', 'Stuff1Controller@tambahJumlahBarang')->name('tambah.jumlah.barang');

Route::get('/stuff/delete/{id}', 'Stuff1Controller@delete')->name('delete');


Route::get('/request/create/{id}', 'Stuff2Controller@request');
Route::post('/request/create', 'Stuff2Controller@createRequest');
Route::get('/request/datapeminjam', 'Stuff2Controller@report');

Route::get('/mutasi/{id}', 'MutasiController@mutasi');
Route::post('/mutasikeluar', 'MutasiController@mutasikeluar');
Route::get('/reportmutasi', 'MutasiController@reportmutasi');


Route::get('/stuff/pdf', 'Stuff2Controller@readpdf')->name('readpdf');
Route::get('/stuff/pdfmutasi', 'MutasiController@readpdfmutasi')->name('readpdfmutasi');

Route::get('/stuff/pdfbarang', 'Stuff1Controller@readpdfbarang')->name('readpdfbarang');

Route::get('/home2', 'HomeController@index')->name('home');
Route::get('/kembalikan/{id}', 'PengembalianController@create')->name('create');
Route::post('/kembali/save', 'PengembalianController@save');
