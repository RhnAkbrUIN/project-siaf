<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Dosen;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
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

        // $faker = Faker::create();

        // $data = [];
        // for ($i = 0; $i <= 20; $i++) {
        //     $data[] = [
        //         'nip' => '2011000100' . $i,
        //         'name_dosen' => 'Dosen ke-' . $i,
        //         'jk' => $faker->randomElement(['Laki-laki', 'Perempuan']),
        //         'kode_matkul' => $faker->randomElement(['54001', '54002', '54003', '54004', '54005']),
        //     ];
        // }

        // foreach ($data as $item) {
        //     Dosen::insert($item);
        // }

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
