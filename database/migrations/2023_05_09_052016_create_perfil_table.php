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
        Schema::create('perfil', function (Blueprint $table) {
            $table->bigIncrements('idPerfil');
            $table->string('nombrePerfil', 50);
            $table->integer('bitEstado');
            $table->integer('usuCrea');
            $table->integer('usuMod');
            $table->timestamps();
        });

        Schema::table('perfil', function (Blueprint $table) {
            $table->renameColumn('id', 'idPerfil');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfil');
    }
};
