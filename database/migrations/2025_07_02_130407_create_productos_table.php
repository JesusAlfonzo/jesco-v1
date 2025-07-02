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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('codigo')->unique();
            $table->foreignId('marca_id')->constrained();
            $table->foreignId('presentacion_id')->constrained('presentaciones');
            $table->foreignId('categoria_id')->constrained();
            $table->foreignId('unidad_medida_id')->constrained();
            $table->enum('tipo', ['oficina', 'laboratorio', 'kit']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
