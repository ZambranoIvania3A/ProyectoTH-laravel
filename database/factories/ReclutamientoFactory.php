<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reclutamiento;
use App\Models\Empleado;
use App\Models\Cargo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reclutamiento>
 */
class ReclutamientoFactory extends Factory
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
            'cargo_id' => $this->faker->numberBetween(1, 10),  // ID de cargo aleatorio
            'fecha_inicio' => $this->faker->date(),
            'fecha_fin' => $this->faker->optional()->date(),  // Fecha de fin opcional
            'estado' => $this->faker->randomElement(['pendiente', 'en progreso', 'finalizado']),  // Estado del reclutamiento
            'descripcion' => $this->faker->optional()->paragraph(),  // Descripción opcional
        ];
    }
}
