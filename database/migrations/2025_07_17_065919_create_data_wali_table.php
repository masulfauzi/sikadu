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
        Schema::create('data_wali', function (Blueprint $table) {
            $table->id();
            $table->uuid('id_siswa');
            $table->uuid('pekerjaan');
            $table->uuid('pendidikan');
            $table->uuid('penghasilan_bulanan');
            $table->foreign('id_siswa')->references('id')->on('siswa')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_wali');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->foreign('pekerjaan')->references('id')->on('pekerjaan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('pendidikan')->references('id')->on('pendidikan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('penghasilan_bulanan')->references('id')->on('penghasilan_bulanan')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_wali');
    }
};
