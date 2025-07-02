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
        Schema::create('examenes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('muestra_id')->constrained();
            $table->foreignId('tipo_examen_id')->constrained('tipo_examenes');
            $table->foreignId('usuario_id')->constrained('users');
            $table->foreignId('estado_examen_id')->constrained('estado_examenes');
            $table->dateTime('fecha_solicitud');
            $table->dateTime('fecha_procesamiento')->nullable();
            $table->json('resultado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examenes');
    }
};
