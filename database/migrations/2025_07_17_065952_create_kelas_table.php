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
        Schema::create('kelas', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('kelas');
            $table->uuid('id_jurusan');
            $table->uuid('id_tingkat');
            $table->foreign('id_tingkat')->references('id')->on('tingkat')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_jurusan')->references('id')->on('jurusan')->onUpdate('cascade')->onDelete('restrict');
            $table->string('kode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
