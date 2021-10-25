<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use App\Models\Jurusan;
use App\Models\Mahasiswa;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Fakultas::create(
            [
                'nama' => 'Fakultas Ilmu Komputer',
                'dekan' => 'Prof Soerjadi',
            ]
        );

        Fakultas::create(
            [
                'nama' => 'Fakultas MIPA',
                'dekan' => 'Dr. Nita Sumartini M.Si',
            ]
        );


        Fakultas::create(
            [
                'nama' => 'Fakultas Hukum',
                'dekan' => 'Prof Chandra Nababan',
            ]
        );


        Fakultas::create(
            [
                'nama' => 'Fakultas Ekonomi',
                'dekan' => 'Dr. Nisa Mulyani',
            ]
        );

        Jurusan::create(
            [
                'nama' => 'Ilmu Komputer',
                'kepala_jurusan' => 'Dr. Syahrial, M.Kom',
                'daya_tampung' => 120,
                'fakultas_id' => 1,
            ]
        );
        Jurusan::create(
            [
                'nama' => 'Sistem Informasi',
                'kepala_jurusan' => 'Dr. Umar Agustinus, M.Sc.',
                'daya_tampung' => 90,
                'fakultas_id' => 1,
            ]
        );
        Jurusan::create(
            [
                'nama' => 'Biologi',
                'kepala_jurusan' => 'Lidya Gunawan M.Si',
                'daya_tampung' => 150,
                'fakultas_id' => 2,
            ]
        );
        Jurusan::create(
            [
                'nama' => 'Matematika',
                'kepala_jurusan' => 'Prof. Gunarto, M.Si',
                'daya_tampung' => 160,
                'fakultas_id' => 2,
            ]
        );
        Jurusan::create(
            [
                'nama' => 'Akuntansi',
                'kepala_jurusan' => 'Umar Syaffudin, M.Hum',
                'daya_tampung' => 300,
                'fakultas_id' => 4,
            ]
        );
        
        $faker = Faker::create('ru_RU');
        $faker->seed(123);

        for ($i=0; $i < 200; $i++) { 
           Mahasiswa::create([
               'nim' => $faker->unique()->numerify('01118###'),
               'nama' => $faker->firstName." ".$faker->lastName,
               'jurusan_id' => $faker->numberBetween(1,4),
           ]);
        }
    }
}
