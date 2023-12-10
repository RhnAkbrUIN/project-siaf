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
        // Mahasiswa::insert([
        //     [
        //         'nim' => '112101',
        //         'name_mhs' => 'Muhammad Raihan Akbar',
        //         'jk' => 'Laki-laki',
        //         'kelas' => 'C',
        //         'semester' => 5,
        //         'angkatan' => 2021,
        //     ],
        //     [
        //         'nim' => '112102',
        //         'name_mhs' => 'Rio Tegar Syahputra',
        //         'jk' => 'Laki-laki',
        //         'kelas' => 'C',
        //         'semester' => 5,
        //         'angkatan' => 2021,
        //     ],
        //     [
        //         'nim' => '112103',
        //         'name_mhs' => 'Evan Dick Briantoro',
        //         'jk' => 'Laki-laki',
        //         'kelas' => 'C',
        //         'semester' => 5,
        //         'angkatan' => 2021,
        //     ],
        //     [
        //         'nim' => '112104',
        //         'name_mhs' => 'Muhammad Fikri Fahreza',
        //         'jk' => 'Laki-laki',
        //         'kelas' => 'C',
        //         'semester' => 5,
        //         'angkatan' => 2021,
        //     ],
        // ]);

        $faker = Faker::create();

        $data = [];
        for ($i = 0; $i <= 100; $i++) {
            $data[] = [
                'nim' => '1121' . $i,
                'name_mhs' => 'Mahasiswa ke-' . $i,
                'jk' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'kelas' => $faker->randomElement(['A', 'B', 'C', 'D', 'E']),
                'semester' => $faker->numberBetween(1, 12),
                'angkatan' => $faker->year(),
            ];
        }

        foreach ($data as $item) {
            Mahasiswa::insert($item);
        }

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
