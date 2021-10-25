<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public function jurusan()
    {
        return $this->belongsTo('App\Model\Jurusan');
    }

    public function fakultas()
    {
        return $this->hasManyThrough('App\Models\Fakultas', 'App\Models\Jurusan');
    }
}
