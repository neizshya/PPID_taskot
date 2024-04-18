<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judul_dok extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'jenis_info',
        'jenis_dok',
        'jenis_ppid',
        'keterangan',
    ];
}
