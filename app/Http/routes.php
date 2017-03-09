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

Route::get('pengguna/{pengguna}', function($pengguna){ //pake parameter ()karena sdh dideklarasikan
	return "Hello World dari pengguna $pengguna";
});


Route::get('kelasd2/framework/{mhs?}', function($mhs="Anonim"){ //parameter boleh dikasih parameter/engga karena menggunakan tanya?
	return "Selamat datang $mhs";
});