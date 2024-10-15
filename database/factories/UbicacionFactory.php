<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ubicacion;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ubicacion>
 */
class UbicacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'edificio' => $this->faker->word, // Nombre del edificio
            'piso' => $this->faker->numberBetween(1, 10), // Piso
            'oficina' => $this->faker->word, // Nombre de la oficina
        ];
    }
}
