<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contrato;
use App\Models\Empleado;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contrato>
 */
class ContratoFactory extends Factory
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
            'fecha_inicio' => $this->faker->date,
            'fecha_fin' => $this->faker->date,
            'tipo_contrato' => $this->faker->randomElement(['Indefinido', 'Temporal', 'Por Proyecto']),
        ];
    }
}
