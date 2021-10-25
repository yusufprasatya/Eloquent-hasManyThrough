<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Jurusan;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class AplikasiController extends Controller
{
    public function all()
    {
        echo "## Fakultas ## <br>";
        $fa = Fakultas::all();
        foreach ($fa as $fakultas) {
            echo "$fakultas->id | $fakultas->nama | $fakultas->dekan <br>";
        }

        echo "<hr>";
        echo "## Jurusan ## <br>";
        $jurusans = Jurusan::all();
        foreach ($jurusans as $jurusan) {
            echo "$jurusan->id | $jurusan->nama | $jurusan->kepala_jurusan | $jurusan->daya_tampung | $jurusan->fakultas_id<br>";
        }

        echo "<hr>";
        echo "## Mahasiswa ## <br>";
        $mahasiswas = Mahasiswa::all();
        foreach ($mahasiswas as $mahasiswa) {
            echo "$mahasiswa->id | $mahasiswa->nim | $mahasiswa->nama | $mahasiswa->jurusan_id <br>";
        }
    }

    public function relationship1()
    {
        echo "## Fakultas MIPA ## <br>";
        $fakultas = Fakultas::where('nama' ,'Fakultas MIPA')->first();
        foreach ($fakultas->jurusans as $jurusan) {
            echo "$jurusan->nama <br>";
        }

        echo "<hr>";
        echo "## Jurusan Ilmu Komputer ## <br>";
        $jurusans = Jurusan::where('nama', 'Ilmu Komputer')->first();
        foreach ($jurusans->mahasiswas as $mahasiswa) {
            echo "$mahasiswa->nama <br>";
        }

    }

    public function relationship2()
    {
        $fakultas = Fakultas::where('nama','Fakultas MIPA')->first();
        echo "## Mahasiswa $fakultas->nama ## <hr>";

        foreach ($fakultas->jurusans as $jurusan) {
           foreach ($jurusan->mahasiswas as $mahasiswa) {
                echo "$mahasiswa->nama <br> ";
           }
        }

    }

    public function relationship3()
    {
        $fakultas = Fakultas::where('nama', 'Fakultas MIPA')->first();
        echo "## Mahasiswa $fakultas->nama ## <hr>";

        foreach ($fakultas->mahasiswas as $mahasiswa) {
            echo "$mahasiswa->nama <br>";
        }
    }
}
