<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EvaluacionDesempeño;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluacionDesempeño>
 */
class EvaluacionDesempeñoFactory extends Factory
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
            'fecha' => $this->faker->date(),  // Fecha de la evaluación
            'calificacion' => $this->faker->numberBetween(1, 10),  // Calificación de 1 a 10 (corregido para ser consistente con una evaluación de desempeño típica)
            'comentarios' => $this->faker->optional()->sentence(10),  // Comentarios opcionales
        ];
    }
}
