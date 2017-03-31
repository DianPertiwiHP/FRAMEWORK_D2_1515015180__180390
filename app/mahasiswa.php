<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{

    protected $table ='mahasiswa'; 
    protected $fillable =['Nama', 'Nim', 'Alamat','pengguna_id'];

    public function Pengguna()
    {
    	return $this ->belongsTo(Pengguna::class, 'id');
    }

    public function jadwal_matakuliah()
    {
    	return $this ->hasMany(jadwal_matakuliah::class);
    }
}