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
        Schema::create('formaciones_academicas', function (Blueprint $table) {
            $table->id('formacion_id');  
            $table->unsignedBigInteger('empleado_id');  // Relación con Empleado
            $table->string('nivel', 50);
            $table->string('institucion', 50);
            $table->string('especialidad', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formaciones_academicas');
    }
};
