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
        Schema::create('test_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->integer('required_quantity');
            $table->text('usage_instructions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_product');
    }
};
