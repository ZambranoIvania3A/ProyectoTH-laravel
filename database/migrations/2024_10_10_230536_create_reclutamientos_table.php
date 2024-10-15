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
        Schema::create('reclutamientos', function (Blueprint $table) {
            $table->id('reclutamiento_id');  
            $table->unsignedBigInteger('empleado_id');  // Relación con Empleado (si aplica)
            $table->unsignedBigInteger('cargo_id');  // Relación con Cargo
            $table->date('fecha_inicio');  
            $table->date('fecha_fin')->nullable();  
            $table->string('estado', 50); 
            $table->text('descripcion')->nullable();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclutamientos');
    }
};
