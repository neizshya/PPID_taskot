<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keberatan_online extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_reg',
        'nama_pemohon',
        'ktp',
        'alamat',
        'pekerjaan',
        'no_hp',
        'email',
        'info_dimohon',
        'tujuan_info',
        'memperoleh_info',
        'mengirim_info',
        'file_ktp',
        'alasan_keberatan',
        'kasus_posisi',
    ];
}
