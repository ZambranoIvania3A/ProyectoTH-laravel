<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\FormacionAcademica;
use App\Models\Empleado;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FormacionAcademica>
 */
class FormacionAcademicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'empleado_id' => $this->faker->numberBetween(1, 100), // Cambia el rango según el número de empleados
            'nivel' => $this->faker->randomElement(['Licenciatura', 'Maestría', 'Doctorado', 'Técnico Superior', 'Ingeniero']),
            'institucion' => $this->faker->company, // Usa faker para una institución aleatoria
            'especialidad' =>  $this->faker->text(50), // Usa faker para un nombre de especialidad aleatorio
        ];
        
    }
}
