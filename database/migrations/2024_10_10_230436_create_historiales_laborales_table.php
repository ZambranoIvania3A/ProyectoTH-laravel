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
        Schema::create('historiales_laborales', function (Blueprint $table) {
            $table->id('historial_id');  
            $table->unsignedBigInteger('empleado_id');  // Relación con Empleado
            $table->unsignedBigInteger('departamento_id');  // Relación con Departamento
            $table->unsignedBigInteger('cargo_id');  // Relación con Cargo
            $table->unsignedBigInteger('tipo_licencia_id'); //Relación con Tipo de licencia
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('descripcion', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historiales_laborales');
    }
};
