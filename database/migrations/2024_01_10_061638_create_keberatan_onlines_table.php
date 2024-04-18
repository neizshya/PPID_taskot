<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('keberatan_onlines', function (Blueprint $table) {
            $table->id();
            $table->string('no_reg');
            $table->string('nama_pemohon');
            $table->string('ktp');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->string('no_hp');
            $table->string('email');
            $table->string('info_dimohon');
            $table->string('tujuan_info');
            $table->string('memperoleh_info');
            $table->string('mengirim_info');
            $table->string('alasan_keberatan');
            $table->string('kasus_posisi');
            $table->string('file_ktp');
            $table->string('status_admin');
            $table->string('status_user');
            $table->string('tgl_masuk'); //tgl permohonan masuk
            $table->string('tgl_proses'); //tgl permohonan diproses 
            $table->string('tgl_ditolak'); //tgl permohonan ditolak 
            $table->string('tgl_selesai'); //tgl permohonan selesai 
            $table->string('file_balasan'); //file surat diterima/ditolak
            $table->string('file_info'); //file informasi yang diminta
            $table->string('tgl_konfirmasi'); //tgl konfirmasi user (sesuai/tidak sesuai)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keberatan_onlines');
    }
};
