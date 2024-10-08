<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NIK extends Model
{
    use HasFactory;

    protected $fillable = ['nik', 'name', 'jenis_kelamin', 'kabupaten', 'kecamatan', 'kelurahan'];
}
