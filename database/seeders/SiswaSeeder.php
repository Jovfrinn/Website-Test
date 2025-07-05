<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            'user_id' => '5',
            'nama_lengkap' => 'Siswa 1',
            'nisn' => '1234567890',
            'alamat' => 'Jl. Kebon Jeruk',
            'kelas_id' => '1',
        ];

        \App\Models\Siswa::create($array);
    }
}
