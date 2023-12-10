<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Dosen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen::insert([
            [
                'nip' => '20110001001',
                'name_dosen' => 'Safira Anggia Marwan',
                'jk' => 'Perempuan',
                'kode_matkul' => '54001',
            ],
            [
                'nip' => '20110001002',
                'name_dosen' => 'Sabrina Erisaputri',
                'jk' => 'Perempuan',
                'kode_matkul' => '54002',
            ],
            [
                'nip' => '20110001003',
                'name_dosen' => 'Aelissa Maharani',
                'jk' => 'Perempuan',
                'kode_matkul' => '54004',
            ],
        ]);

        // Seed data for users
        foreach (Dosen::all() as $dosen) {
            User::create([
                'dosen_id' => $dosen->id,
                'email' => $dosen->nip . '@example.com',
                'password' => Hash::make('123'),
                'roles' => 'dosen',
            ]);
        }
    }
}
