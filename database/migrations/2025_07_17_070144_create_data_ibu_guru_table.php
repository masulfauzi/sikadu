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
            $table->uuid('id')->primary();
            $table->string('nama_ibu');
            $table->uuid('id_guru');
            $table->foreign('id_guru')->references('id')->on('guru')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('data_ibu_guru');
    }
};
