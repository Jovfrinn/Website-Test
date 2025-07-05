<?php

namespace Database\Seeders;

use App\Models\ProfileSekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = [
            'nama_sekolah' => 'SMPN 15',
            'motto' => 'Mencerdaskan Masyarakat',
            'visi' => 'Menjadi Sekolah yang Unggul dan Berkarakter',
            'misi' => 'Meningkatkan Kualitas Pelajaran dan Prestasi Siswa',
            'alamat' => 'Jl. Raya Cikarang',
            'telepon' => '08123456789',
            'email' => 'gaje1123@gmail.com',
        ];

        ProfileSekolah::create($profiles); // Menggunakan ProfileSekolah::create() untuk menyimpan data ke dalam tabel profile_sekolahs, bukan ProfileSekolah::inser
    }
}
