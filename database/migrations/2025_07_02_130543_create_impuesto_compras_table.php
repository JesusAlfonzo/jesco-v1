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
        Schema::create('impuesto_compras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orden_compra_id')->constrained();
            $table->foreignId('tipo_impuesto_id')->constrained('tipo_impuestos');
            $table->decimal('monto', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impuesto_compras');
    }
};
