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
        Schema::create('judul_doks', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('jenis_info');
            $table->string('jenis_dok');
            $table->string('jenis_ppid');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('judul_doks');
    }
};
