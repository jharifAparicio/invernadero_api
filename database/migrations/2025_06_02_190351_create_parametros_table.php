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
        Schema::create('parametros', function (Blueprint $table) {
            $table->id();
            // tipo de parametro entre "temperatura" y "humedad"
            $table->enum('tipo', ['temperatura', 'humedad',"Luz"]);
            $table->decimal('valor_minimo');
            $table->decimal('valor_maximo')->nullable();
            $table->string('unidad')->default('%');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametros');
    }
};
