<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nim', 'nama', 'tgl_lahir', 'email', 'image', 'jurusan_id'];


    public function jurusan()
    {
    	return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id');
    }
}
