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




Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');





Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
