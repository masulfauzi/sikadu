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
        Schema::create('siswa', function (Blueprint $table) {
            $table->uuid('id');
            $table->integer('nisn');
            $table->integer('nis');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['l','p']);
            $table->integer('nik');
            $table->uuid('sekolah_asal');
            $table->uuid('id_sekolah');
            $table->foreign('sekolah_asal')->references('id')->on('sekolah_asal')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_sekolah')->references('id')->on('sekolah')->onUpdate('cascade')->onDelete('restrict');
            $table->string('tempat_lahir');
            $table->date('tg;_lahir');
            $table->uuid('agama');
            $table->uuid('alamat');
            $table->uuid('alat_transportasi');
            $table->uuid('jenis_tinggal');
            $table->foreign('agama')->references('id')->on('agama')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('alamat')->references('id')->on('desa')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('alat_transportasi')->references('id')->on('alat_transportasi')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('jenis_tinggal')->references('id')->on('jenis_tinggal')->onUpdate('cascade')->onDelete('restrict');
            $table->integer('no_telp');
            $table->string('email');
            $table->integer('no_registrasi_akta_lahir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
