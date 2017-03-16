<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosenn extends Model
{
    protected $table='dosenn';
    protected $fillable=['Nama','NIP', 'Alamat','pengguna_id'];
}
