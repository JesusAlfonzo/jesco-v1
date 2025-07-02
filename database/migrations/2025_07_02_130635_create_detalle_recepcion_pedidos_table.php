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
        Schema::create('detalle_recepcion_pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recepcion_pedido_id')->constrained('recepcion_pedidos');
            $table->foreignId('producto_id')->constrained('productos');
            $table->foreignId('lote_id')->constrained('lotes');
            $table->decimal('cantidad_recibida', 10, 2);
            $table->decimal('cantidad_devuelta', 10, 2)->default(0);
            $table->string('motivo_devolucion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_recepcion_pedidos');
    }
};
