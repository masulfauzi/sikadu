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
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->string('gelar_depan');
            $table->string('gelar_belakang');
            $table->bigInteger('nik');
            $table->enum('jenis_kelamin', ['l', 'p']);
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->uuid('id_desa');
            $table->string('alamat');
            $table->uuid('agama');
            $table->uuid('status_perkawinan');
            $table->uuid('id_sekolah');
            $table->foreign('id_desa')->references('id')->on('desa')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('agama')->references('id')->on('agama')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('status_perkawinan')->references('id')->on('status_perkawinan')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_sekolah')->references('id')->on('sekolah')->onUpdate('cascade')->onDelete('restrict');
            $table->bigInteger('npwp');
            $table->uuid('jenis_gtk');
            $table->uuid('jabatan_gtk');
            $table->uuid('status_kepegawaian');
            $table->foreign('jenis_gtk')->references('id')->on('jenis_gtk')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('jabatan_gtk')->references('id')->on('jabatan_gtk')->onUpdate('cascade')->onDelete('restrict');
            $table->bigInteger('nuptk');
            $table->foreign('status_kepegawaian')->references('id')->on('status_kepegawaian')->onUpdate('cascade')->onDelete('restrict');
            $table->bigInteger('nip');
            $table->string('email');
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
        Schema::dropIfExists('guru');
    }
};
