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
        Schema::create('data_ibu_guru', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('nama_ibu');
            $table->uuid('id_guru');
            $table->foreign('id_guru')->references('id')->on('guru')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_ibu_guru');
    }
};
