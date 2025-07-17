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
        Schema::create('data_pasangan_guru', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('nama');
            $table->uuid('id_guru');
            $table->enum('jenis_kelamin', ['l', 'p']);
            $table->foreign('id_guru')->references('id')->on('guru')->onUpdate('cascade')->onDelete('cascade');
            $table->string('pekerjaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pasangan_guru');
    }
};
