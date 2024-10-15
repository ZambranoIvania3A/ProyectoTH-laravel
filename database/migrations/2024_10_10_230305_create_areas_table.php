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
        Schema::create('areas', function (Blueprint $table) {
            $table->id('area_id');
            $table->string('nombre_area', 50);
            $table->unsignedBigInteger('departamento_id');  // Relación con Departamento
            $table->unsignedBigInteger('rol_id');  // Relación con Roles de Pago
            $table->string('descripcion', 255); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
