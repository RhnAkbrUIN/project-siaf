<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed data for mahasiswa
        Mahasiswa::insert([
            [
                'nim' => '112101',
                'name_mhs' => 'Muhammad Raihan Akbar',
                'jk' => 'Laki-laki',
                'kelas' => 'C',
                'semester' => 5,
                'angkatan' => 2021,
                'dosen_id' => 1,
            ],
            [
                'nim' => '112102',
                'name_mhs' => 'Rio Tegar Syahputra',
                'jk' => 'Laki-laki',
                'kelas' => 'C',
                'semester' => 5,
                'angkatan' => 2021,
                'dosen_id' => 1,
            ],
            [
                'nim' => '112103',
                'name_mhs' => 'Evan Dick Briantoro',
                'jk' => 'Laki-laki',
                'kelas' => 'C',
                'semester' => 5,
                'angkatan' => 2021,
                'dosen_id' => 2,
            ],
            [
                'nim' => '112104',
                'name_mhs' => 'Muhammad Fikri Fahreza',
                'jk' => 'Laki-laki',
                'kelas' => 'C',
                'semester' => 5,
                'angkatan' => 2021,
                'dosen_id' => 2,
            ],
            [
                'nim' => '112105',
                'name_mhs' => 'Mega',
                'jk' => 'Perempuan',
                'kelas' => 'D',
                'semester' => 3,
                'angkatan' => 2022,
                'dosen_id' => 1,
            ],
            [
                'nim' => '112106',
                'name_mhs' => 'Sinta',
                'jk' => 'Perempuan',
                'kelas' => 'D',
                'semester' => 3,
                'angkatan' => 2022,
                'dosen_id' => 2,
            ],
        ]);

        // $faker = Faker::create();

        // $data = [];
        // for ($i = 0; $i <= 200; $i++) {
        //     $data[] = [
        //         'nim' => '1121' . $i,
        //         'name_mhs' => 'Mahasiswa ke-' . $i,
        //         'jk' => $faker->randomElement(['Laki-laki', 'Perempuan']),
        //         'kelas' => $faker->randomElement(['A', 'B', 'C', 'D']),
        //         'semester' => $faker->numberBetween(1, 8),
        //         'angkatan' => $faker->randomElement(['2020', '2021', '2022', '2023']),
        //         'dosen_id' => $faker->randomElement(['1','2','3','4']),
        //     ];
        // }

        // foreach ($data as $item) {
        //     Mahasiswa::insert($item);
        // }

        // Seed data for users
        foreach (Mahasiswa::all() as $mahasiswa) {
            User::create([
                'mahasiswa_id' => $mahasiswa->id,
                'email' => $mahasiswa->nim . '@example.com',
                'password' => Hash::make('123'),
                'roles' => 'mahasiswa',
            ]);
        }
    }
}
