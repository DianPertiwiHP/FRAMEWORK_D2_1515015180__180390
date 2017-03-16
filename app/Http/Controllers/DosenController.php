<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosenn;

class DosenController extends Controller
{
    public function awal()
    {
    	return "Hello dari DosenController";
    }
    public function tambah()
    {
    	return $this ->simpan();
    }
    public function simpan()
    {
    	$dosenn = new dosenn();
    	$dosenn->Nama = 'Susi';
    	$dosenn ->NIP = '121213';
    	$dosenn ->Alamat = 'Jl. Perjuangan';
        $dosenn->pengguna_id ='1';
    	$dosenn ->save();
    	return "data dengan username($dosenn->Nama)telah disimpan";
    }
}
