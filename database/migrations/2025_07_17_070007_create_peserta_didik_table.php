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
        Schema::create('peserta_didik', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_siswa');
            $table->uuid('id_semester');
            $table->uuid('id_kelas');
            $table->foreign('id_siswa')->references('id')->on('siswa')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_semester')->references('id')->on('semester')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_kelas')->references('id')->on('kelas')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
             $table->softDeletes();
            $table->string('created_by', 36)->nullable();
            $table->string('updated_by', 36)->nullable();
            $table->string('deleted_by', 36)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_didik');
    }
};
