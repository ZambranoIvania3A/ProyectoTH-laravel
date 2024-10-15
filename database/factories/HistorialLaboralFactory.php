<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empleado;
use App\Models\Departamento;
use App\Models\Cargo;
use App\Models\TipoLicencia;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HistorialLaboral>
 */
class HistorialLaboralFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'empleado_id' => $this->faker->numberBetween(1, 100), 
            'departamento_id' => $this->faker->numberBetween(1, 5), // Cambia según el número de departamentos
            'cargo_id' => $this->faker->numberBetween(1, 5), // Cambia según el número de cargos
            'tipo_licencia_id' => $this->faker->numberBetween(1, 5), // Cambia según los tipos de licencia
            'fecha_inicio' => $this->faker->date(),
            'fecha_fin' => $this->faker->date(),
            'descripcion' => $this->faker->text(50),  
        ];
    }
}
