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
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            // Foreign key to the dispositivos table
            $table->foreignId('dispositivo_id')->constrained('dispositivos')->onDelete('cascade');
            $table->decimal('temperature')->nullable();
            $table->decimal('humidity')->nullable();
            $table->decimal('percentajeLight')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensors');
    }
};
