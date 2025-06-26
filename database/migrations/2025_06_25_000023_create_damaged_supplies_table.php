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
        Schema::create('damaged_supplies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('batch_id')->constrained();
            $table->foreignId('lab_test_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('employee_id')->constrained();
            $table->foreignId('damage_type_id')->constrained();
            $table->integer('quantity');
            $table->text('description')->nullable();
            $table->timestamp('recorded_at')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('damaged_supplies');
    }
};
