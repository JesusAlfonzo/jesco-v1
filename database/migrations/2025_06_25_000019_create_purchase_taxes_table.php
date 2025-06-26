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
        Schema::create('purchase_taxes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_id')->constrained()->onDelete('cascade');
            $table->string('type'); // IVA, ISLR, etc.
            $table->decimal('percentage', 5, 2);
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_taxes');
    }
};
