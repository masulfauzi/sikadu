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
            $table->uuid('id')->primary();
            $table->bigInteger('nisn');
            $table->bigInteger('nis');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['l','p']);
            $table->integer('nik');
            $table->uuid('id_sekolah_asal');
            $table->uuid('id_sekolah');
            $table->foreign('id_sekolah_asal')->references('id')->on('sekolah_asal')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_sekolah')->references('id')->on('sekolah')->onUpdate('cascade')->onDelete('restrict');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->uuid('id_agama');
            $table->uuid('id_desa');
            $table->string('alamat');
            $table->uuid('id_alat_transportasi');
            $table->uuid('id_jenis_tinggal');
            $table->foreign('id_agama')->references('id')->on('agama')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_desa')->references('id')->on('desa')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_alat_transportasi')->references('id')->on('alat_transportasi')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_jenis_tinggal')->references('id')->on('jenis_tinggal')->onUpdate('cascade')->onDelete('restrict');
            $table->bigInteger('no_telp');
            $table->string('email');
            $table->bigInteger('no_registrasi_akta_lahir');
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
        Schema::dropIfExists('siswa');
    }
};
