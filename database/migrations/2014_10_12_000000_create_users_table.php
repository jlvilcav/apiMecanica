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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombreUsuario',50);
            $table->string('password',100);
            $table->string('numeroDocumento',30)->unique();
            $table->integer('idPersona');
            $table->integer('idPerfil');
            $table->char('tipoUsuario');
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
        Schema::dropIfExists('users');
    }
};
