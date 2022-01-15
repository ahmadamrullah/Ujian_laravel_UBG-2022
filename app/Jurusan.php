<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable = ['kd_jrs', 'nama_jrs'];

    public function mahasiswa()
    {
    	return $this->hasOne(Mahasiswa::class, 'jurusan_id', 'id');
    }
}
