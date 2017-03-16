<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table ='pengguna'; //menghubungkan table pengguna didatabase
    protected $fillable =['username', 'password']; //fillable yang boleh diisi
}
