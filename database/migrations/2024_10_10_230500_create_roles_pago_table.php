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
        Schema::create('roles_pago', function (Blueprint $table) {
            $table->id('rol_id'); 
            $table->decimal('monto', 8, 2);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->date('fecha_actualizacion')->nullable(); // Fecha de la última actualización
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles_pago');
    }
};
