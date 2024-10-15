<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RolPago;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RolPago>
 */
class RolPagoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'monto' => $this->faker->randomFloat(2, 1000, 2000), // Monto aleatorio entre 1000 y 2000
            'fecha_inicio' => $this->faker->date(),
            'fecha_fin' => $this->faker->date(),
            'fecha_actualizacion' => $this->faker->optional()->date(), // Nullable
        ];
    }
}
