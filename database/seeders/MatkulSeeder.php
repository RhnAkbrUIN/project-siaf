<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matkul = [
            [
                'kode_matkul' => '54001',
                'name_matkul' => 'Dasar-dasar Pemrograman',
                'sks' => 3,
            ],
            [
                'kode_matkul' => '54002',
                'name_matkul' => 'Rekayasa Perangkat Lunak',
                'sks' => 2,
            ],
            [
                'kode_matkul' => '54003',
                'name_matkul' => 'Sistem Operasi Lanjutan',
                'sks' => 4,
            ],
            [
                'kode_matkul' => '54004',
                'name_matkul' => 'Kalkulus 1',
                'sks' => 3,
            ],
            [
                'kode_matkul' => '54005',
                'name_matkul' => 'Etika Profesi dan Teknologi Informasi',
                'sks' => 1,
            ],
        ];

        foreach($matkul as $key => $var){
            Matakuliah::create($var);
        }
    }
}
