<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sancion;
use App\Models\Empleado;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sancion>
 */
class SancionFactory extends Factory
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
            'fecha_sancion' => $this->faker->date(),  // Genera una fecha aleatoria
            'motivo' => $this->faker->sentence(3),  // Un motivo corto
            'descripcion' => $this->faker->sentence(10),  // Descripción más larga
        ];
    }
}
