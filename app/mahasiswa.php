<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table ='mahasiswa'; 
    protected $fillable =['Nama', 'Nim', 'Alamat','pengguna_id'];
}