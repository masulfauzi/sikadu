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
        Schema::create('sekolah', function (Blueprint $table) {
            $table->uuid('id');
            $table->integer('npsn');
            $table->string('nama_sekolah');
            $table->string('alamat');
            $table->integer('no_telp');
            $table->json('logo');
            $table->string('nama_kepsek');
            $table->integer('nlp_kepsek');
            $table->uuid('id_jenjang');
            $table->foreign('id_jenjang')->references('id')->on('jenjang')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah');
    }
};
