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
        Schema::create('pago_pacientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->constrained();
            $table->foreignId('examen_id')->constrained('examenes');
            $table->decimal('monto', 10, 2);
            $table->foreignId('moneda_id')->constrained('monedas');
            $table->foreignId('metodo_pago_id')->constrained();
            $table->string('referencia');
            $table->dateTime('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago_pacientes');
    }
};
