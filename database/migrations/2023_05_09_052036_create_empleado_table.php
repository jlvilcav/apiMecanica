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
        Schema::create('empleado', function (Blueprint $table) {
            $table->bigIncrements('idEmpleado');
            $table->integer('idPersona');
            $table->dateTime('fecIngreso', $precision = 0);
            $table->dateTime('FecFin', $precision = 0);
            $table->integer('idCargo');
            $table->decimal('sueldo', $precision = 8, $scale = 2);
            $table->string('rutaContrato', 100);
            $table->integer('bitEstado');
            $table->integer('usuCrea');
            $table->integer('usuMod');
            $table->timestamps();
        });

        Schema::table('empleado', function (Blueprint $table) {
            $table->renameColumn('id', 'idEmpleado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleado');
    }
};
