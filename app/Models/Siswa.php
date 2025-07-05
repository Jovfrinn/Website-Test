<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'nisn',
        'alamat',
        'kelas_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function kelas()
    {
        return $this->belongsTo(DataKelas::class, 'kelas_id', 'id');
    }
}
