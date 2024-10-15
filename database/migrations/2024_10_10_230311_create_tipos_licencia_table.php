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
        Schema::create('tipos_licencia', function (Blueprint $table) {
            $table->id('tipo_licencia_id');  
            $table->string('enfermedad', 50);
            $table->string('calamidad_domestica', 50);
            $table->string('accidente_laboral', 50);
            $table->string('vacaciones', 50);
            $table->string('otro_motivo', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_licencia');
    }
};
