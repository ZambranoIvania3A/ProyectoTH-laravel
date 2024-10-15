<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Area;
use App\Models\Departamento;
use App\Models\RolPago;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Area>
 */
class AreaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_area' => $this->faker->word, // Nombre del área
            'departamento_id' => $this->faker->numberBetween(1, 10), // ID del departamento relacionado
            'rol_id' => $this->faker->numberBetween(1, 10), // ID del rol de pago relacionado
            'descripcion' => $this->faker->sentence, // Descripción del área
        ];
    }
}
