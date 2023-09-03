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
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('IdProducto');
            $table->integer('idCategoriaProducto');
            $table->integer('idMarcaProducto');
            $table->integer('idModeloProducto');
            $table->string('nombreProducto', 100);
            $table->string('codigoProducto', 20);
            $table->integer('idMedidaProducto');
            $table->decimal('cantMedida',10,2);
            $table->decimal('stock',10,2);
            $table->decimal('stockMinimo',10,2);
            $table->decimal('precioCompra',10,2);
            $table->decimal('precioVenta',10,2);
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
        Schema::dropIfExists('producto');
    }
};
