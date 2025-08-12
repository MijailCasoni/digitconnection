<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecuta la migración.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            // Relación con usuarios
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Relación con planes
            $table->foreignId('plan_id')->constrained()->onDelete('cascade');

            // Monto de la transacción
            $table->decimal('amount', 8, 2);

            // Estado de venta
            $table->boolean('is_sold')->default(false);

            // Número de venta (opcional)
            $table->string('sale_number')->nullable();

            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Revierte la migración.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};