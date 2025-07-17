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
        Schema::create('guru', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('nama');
            $table->string('gelar_depan');
            $table->string('gelar_belakang');
            $table->integer('nik');
            $table->enum('jenis_kelamin', ['l', 'p']);
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->uuid('alamat');
            $table->uuid('agama');
            $table->uuid('status_perkawinan');
            $table->uuid('id_sekolah');
            $table->foreign('alamat')->references('id')->on('desa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('agama')->references('id')->on('agama')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('status_perkawinan')->references('id')->on('status_perkawinan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_sekolah')->references('id')->on('sekolah')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('npwp');
            $table->uuid('jenis_gtk');
            $table->uuid('jabatan_gtk');
            $table->uuid('status_kepegawaian');
            $table->foreign('jenis_gtk')->references('id')->on('jenis_gtk')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('jabatan_gtk')->references('id')->on('jabatan_gtk')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('nuptk');
            $table->foreign('status_kepegawaian')->references('id')->on('status_kepegawaian')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('nip');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};
