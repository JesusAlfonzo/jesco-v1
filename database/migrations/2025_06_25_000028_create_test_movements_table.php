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
        Schema::create('test_movements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lab_test_id')->constrained();
            $table->foreignId('batch_id')->constrained();
            $table->integer('quantity_used');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_movements');
    }
};
