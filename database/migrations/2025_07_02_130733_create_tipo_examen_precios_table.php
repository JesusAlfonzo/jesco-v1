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
        Schema::create('tipo_examen_precios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_examen_id')->constrained('tipo_examenes');
            $table->foreignId('moneda_id')->constrained('monedas');
            $table->decimal('precio', 10, 2);
            $table->date('fecha_vigencia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_examen_precios');
    }
};
