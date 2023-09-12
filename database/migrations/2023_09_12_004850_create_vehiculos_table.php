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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->bigIncrements('idVehiculo');
            $table->integer('idMarcaVehiculo');
            $table->integer('idModeloVehiculo');
            $table->string('numPlaca', 100);
            $table->string('vin', 100);
            $table->decimal('cc',10,2);
            $table->string('color', 100);
            $table->string('anio', 100);
            $table->integer('kilometraje');
            $table->integer('idTipoVehiculo');
            $table->integer('idPersona');
            $table->string('observacion', 250);
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
        Schema::dropIfExists('vehiculos');
    }
};
