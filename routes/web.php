<?php

use App\Http\Controllers\pageController;
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

Route::get('/', [pageController::class, 'home']);

Route::get('/tugas4', function(){
    return view('tugas4', ["tittle" => "Tugas 4"]);
});

Route::get('/tugas5', function(){
     return view('tugas5', ["tittle" => "Tugas 5"]);
});

Route::get('/prak1', function(){
    return view('praktikum1', ["tittle" => "Praktikum 1"]);
});

Route::get('/prak2', function(){
    return view('praktikum2', ["tittle" => "Praktikum 2"]);
});

Route::get('ets', "pageController@ETS");

Route::get('tugasPHP', [pageController::class, 'indexPHP']);
Route::post('resultPHP', [pageController::class, 'resultPHP']);


//route CRUD
Route::get('/pegawai','PegawaiController@index');


Route::get('/pegawai/tambah','PegawaiController@tambah');


Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');



Route::post('/pegawai/update','PegawaiController@update');



Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');



Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');
Route::get('/pendapatan/cari','PendapatanController@cari');
Route::get('/pendapatan/detail/{id}','PendapatanController@view');




Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');
Route::get('/absen/detail/{id}','AbsenController@view');






Route::get('/sepatu','SepatuController@index');


Route::get('/sepatu/tambah','SepatuController@tambah');


Route::post('/sepatu/store','SepatuController@store');

Route::get('/sepatu/edit/{id}','SepatuController@edit');



Route::post('/sepatu/update','SepatuController@update');



Route::get('/sepatu/hapus/{id}','SepatuController@hapus');
Route::get('/sepatu/cari','SepatuController@cari');
Route::get('/sepatu/detail/{id}','SepatuController@view');









// Routes EAS
Route::get('/karyawan1','Karyawan1Controller@index');


Route::get('karyawan1/tambah','Karyawan1Controller@tambah');


Route::post('karyawan1/store','Karyawan1Controller@store');

Route::get('karyawan1/edit/{id}','Karyawan1Controller@edit');



Route::post('karyawan1/update','Karyawan1Controller@update');



Route::get('karyawan1/hapus/{id}','Karyawan1Controller@hapus');
Route::get('karyawan1/cari','Karyawan1Controller@cari');
Route::get('karyawan1/detail/{id}','Karyawan1Controller@view');