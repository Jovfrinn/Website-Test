<?php

namespace Database\Seeders;

use App\Models\DataKelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            'nama_kelas' => 'XII PPLG 2',
            'wali_kelas' => 'Bu Luthfi'
        ];

        DataKelas::create($array);
    }
}
