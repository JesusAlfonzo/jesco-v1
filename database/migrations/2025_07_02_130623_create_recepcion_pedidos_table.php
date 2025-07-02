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
        Schema::create('recepcion_pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orden_compra_id')->constrained();
            $table->foreignId('estado_recepcion_id')->constrained('estado_recepciones');
            $table->dateTime('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepcion_pedidos');
    }
};
