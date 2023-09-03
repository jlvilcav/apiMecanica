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
        Schema::create('modeloproducto', function (Blueprint $table) {
            $table->bigIncrements('idModeloProducto');
            $table->integer('idMarcaProducto');
            $table->string('nombreModeloProducto', 100);
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
        Schema::dropIfExists('modeloproducto');
    }
};
