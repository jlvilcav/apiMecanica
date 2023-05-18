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
        Schema::create('cargo', function (Blueprint $table) {
            $table->bigIncrements('idCargo');
            $table->string('nombreCargo', 50);
            $table->integer('bitEstado');
            $table->integer('usuCrea');
            $table->integer('usuMod');
            $table->timestamps();
        });

        // Schema::table('cargo', function (Blueprint $table) {
        //     $table->renameColumn('id', 'idCargo');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargo');
    }
};
