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
        Schema::create('evaluaciones_desempeno', function (Blueprint $table) {
            $table->id('evaluacion_id');  
            $table->unsignedBigInteger('empleado_id');
            $table->date('fecha');
            $table->integer('calificacion');
            $table->string('comentarios', 255)->nullable();  
            $table->timestamps();

             // Definir la clave foránea
    $table->foreign('empleado_id')->references('empleado_id')->on('empleados')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluaciones_desempeno');
    }
};
