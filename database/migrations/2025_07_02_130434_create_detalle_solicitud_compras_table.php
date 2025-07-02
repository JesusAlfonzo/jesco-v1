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
        Schema::create('detalle_solicitud_compras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solicitud_compra_id')->constrained();
            $table->foreignId('producto_id')->constrained();
            $table->decimal('cantidad', 10, 2);
            $table->string('descripcion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_solicitud_compras');
    }
};
