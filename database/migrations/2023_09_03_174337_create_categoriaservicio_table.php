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
        Schema::create('categoriaservicio', function (Blueprint $table) {
            $table->bigIncrements('idCategoriaServicio');
            $table->string('nombreCategoriaServicio', 100);
            $table->integer('bitEstado');
            $table->integer('usuCrea')->nullable();
            $table->integer('usuMod')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoriaservicio');
    }
};
