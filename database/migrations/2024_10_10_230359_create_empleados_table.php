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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('empleado_id');  
            $table->unsignedBigInteger('departamento_id');  // Relación con Departamento
            $table->unsignedBigInteger('cargo_id');  // Relación con Cargo
            $table->unsignedBigInteger('ubicacion_id');  // Relación con Ubicación
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->date('fecha_nacimiento');
            $table->string('email', 50);
            $table->string('telefono', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
