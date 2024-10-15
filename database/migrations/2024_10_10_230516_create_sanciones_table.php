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
        Schema::create('sanciones', function (Blueprint $table) {
            $table->id('sancion_id'); 
            $table->unsignedBigInteger('empleado_id'); 
            $table->date('fecha_sancion')->nullable(); // Campo no nulo
            $table->string('motivo', 100);  
            $table->string('descripcion', 255);  
            $table->timestamps();
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanciones');
    }
};
