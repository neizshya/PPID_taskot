<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi_online extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipe_pemohon',
        'nama_pemohon',
        'ktp_sim',
        'alamat',
        'pekerjaan',
        'no_hp',
        'email',
        'info',
        'alasan',
        'memperoleh_info',
        'mengirim_info',
        'file_ktp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'ktp_sim', 'nik');
    }
}
