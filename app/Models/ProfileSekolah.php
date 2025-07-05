<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileSekolah extends Model
{
    protected $table = 'profile_sekolahs';
    use HasFactory;

    protected $fillable = [
        'nama_sekolah',
        'motto',
        'visi',
        'misi',
        'alamat',
        'telepon',
        'email',
    ];
}
