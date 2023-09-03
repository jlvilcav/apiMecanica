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
        Schema::create('servicio', function (Blueprint $table) {
            $table->bigIncrements('idServicio');
            $table->string('nombreServicio', 100);
            $table->integer('idCategoriaServicio');
            $table->string('codigoServicio', 20);
            $table->decimal('costoServicio',10,2);
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
        Schema::dropIfExists('servicio');
    }
};
