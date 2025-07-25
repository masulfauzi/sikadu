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
        Schema::create('kabupaten', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_kabupaten');
            // $table->foreignId('id_provinsi')->constrained('id_provinsi')->onUpdate('cascade')->onDelete('restrict');    
            $table->uuid('id_provinsi');
            $table->foreign('id_provinsi')->references('id')->on('provinsi')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kabupaten');
    }
};
