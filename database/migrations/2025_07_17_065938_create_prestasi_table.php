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
        Schema::create('prestasi', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('id_siswa');
            $table->uuid('jenis_prestasi');
            $table->uuid('tingkat_prestasi');
            $table->foreign('id_siswa')->references('id')->on('siswa')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_prestasi');
            $table->foreign('jenis_prestasi')->references('id')->on('jenis_prestasi')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('tingkat_prestasi')->references('id')->on('tingkat_prestasi')->onUpdate('cascade')->onDelete('cascade');
            $table->year('tahun');
            $table->string('penyelenggaraan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasi');
    }
};
