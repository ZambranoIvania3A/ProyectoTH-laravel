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
        Schema::create('licencias', function (Blueprint $table) {
            $table->id('licencia_id');  
            $table->unsignedBigInteger('empleado_id');  // Relación con Empleado
            $table->unsignedBigInteger('tipo_licencia_id'); //Relación con Tipo de licencia
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('motivo', 50);
            $table->string('estado', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licencias');
    }
};
