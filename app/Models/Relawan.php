<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'name',
        'jenis_kelamin',
        'kabupaten',
        'kecamatan',
        'kelurahan',
        'alamat',
        'no_handphone',
        'posisi',
        'pengajak',
        'foto_diri',
        'status',
    ];
}
