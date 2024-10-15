<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empleado;
use App\Models\Cargo;
use App\Models\Ubicacion;
use App\Models\Departamento;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'departamento_id' => $this->faker->numberBetween(1, 10), // Cambia el rango según el número de departamentos
            'cargo_id' => $this->faker->numberBetween(1, 10), // Cambia el rango según el número de cargos
            'ubicacion_id' => $this->faker->numberBetween(1, 100), // Cambia el rango según el número de ubicaciones
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'fecha_nacimiento' => $this->faker->date,
            'email' => $this->faker->unique()->safeEmail,
            'telefono' => $this->faker->phoneNumber,
        ];
    }
}
