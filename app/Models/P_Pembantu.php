<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P_Pembantu extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_instansi',
    ];
}
