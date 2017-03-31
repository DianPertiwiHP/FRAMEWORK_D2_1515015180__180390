<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosenn extends Model
{
    protected $table='dosenn';
    protected $fillable=['Nama','NIP', 'Alamat','pengguna_id'];

    public function Pengguna(){
    	return $this ->belongsTo(Pengguna::class,'id');
    }
    public function dosen_matakuliah()
    {
    	return $this->hasMany(dosen_Matakuliah::class,'dosen_id');
    }
}
