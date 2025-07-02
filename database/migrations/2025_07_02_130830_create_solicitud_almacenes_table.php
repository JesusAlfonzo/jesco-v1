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
        Schema::create('solicitud_almacenes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('departamento_id')->constrained();
            $table->foreignId('usuario_id')->constrained('users');
            $table->dateTime('fecha_solicitud');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud_almacenes');
    }
};
