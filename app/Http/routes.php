<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('DianPHP', function(){
	echo "DianPHP";
});

Route::get('hello-world', function(){
	return 'Hello World';
});

// Route::get('pengguna/{pengguna}', function($pengguna){ //pake parameter ()karena sdh dideklarasikan
// 	return "Hello World dari pengguna $pengguna";
// });


Route::get('kelasd2/framework/{mhs?}', function($mhs="Anonim"){ //parameter boleh dikasih parameter/engga karena menggunakan tanya?
	return "Selamat datang $mhs";
});
Route::get('pengguna', 'PenggunaController@awal');
Route::get('pengguna/tambahh', 'PenggunaController@tambah');

Route::get('ruangan','ruanganController@awal');
Route::get('ruangan/tambah','ruanganController@tambah');

Route::get('dosenn','dosenController@awal');
Route::get('dosenn/tambah','dosenController@tambah');

Route::get('mahasiswa','mahasiswaController@awal');
Route::get('mahasiswa/tambah','mahasiswaController@tambah');

Route::get('matakuliah','matakuliahController@awal');
Route::get('matakuliah/tambah','matakuliahController@tambah');

Route::get('dosen_matakuliah','dosen_matakuliahController@awal');
Route::get('dosen_matakuliah/tambaah','dosen_matakuliahController@tambaah');

Route::get('jadwal_matakuliah','jadwal_matakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahController@tambah');


