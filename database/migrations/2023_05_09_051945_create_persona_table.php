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
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('idPersona');
            $table->string('apPaterno', 100);
            $table->string('apMaterno', 100);
            $table->string('nombres', 100);
            $table->integer('tipoDocumento');
            $table->string('numeroDocumento',30);
            $table->string('direccion', 200);
            $table->string('telefonoUno', 30);
            $table->string('telefonoDos', 30);
            $table->string('correo', 50);
            $table->integer('bitEstado');
            $table->integer('usuCrea');
            $table->integer('usuMod');
            $table->timestamps();
        });

        // Schema::table('persona', function (Blueprint $table) {
        //     $table->renameColumn('id', 'idPersona');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
