<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;
    public function jurusans()
    {
        return $this->hasMany('App\Models\Jurusan');
    }

    public function mahasiswas()
    {
        return $this->hasManyThrough('App\Models\Mahasiswa', 'App\Models\Jurusan');
    }
}
