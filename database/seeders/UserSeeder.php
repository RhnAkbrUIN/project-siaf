<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'email' => 'admin@example.com',
                'password' => bcrypt('123'),
                'roles' => 'admin',
            ],
            [
                'email' => 'admin2@example.com',
                'password' => bcrypt('123'),
                'roles' => 'admin',
            ],
            [
                'email' => 'admin3@example.com',
                'password' => bcrypt('123'),
                'roles' => 'admin',
            ],
        ];

        foreach($user as $key => $var){
            User::create($var);
        }
    }
}
