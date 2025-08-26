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
        Schema::create('kepsek', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->string('nip');
            $table->string('gelar_depan');
            $table->string('gelar_belakang');
            $table->uuid('id_sekolah');
            $table->foreign('id_sekolah')->references('id')->on('sekolah')->onUpdate('cascade')->onDelete('restrict');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->enum('is_active', ['0', '1']);
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
        Schema::dropIfExists('kepsek');
    }
};
