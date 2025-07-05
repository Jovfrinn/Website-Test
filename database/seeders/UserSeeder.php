<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'role_id' => 1,
                'name' => 'admin sekolah',
                'email' => 'adminsekolah123@gmail.com',
                'password' => bcrypt('admin123'),

            ]
            ];

            User::insert($users);
    }
}
