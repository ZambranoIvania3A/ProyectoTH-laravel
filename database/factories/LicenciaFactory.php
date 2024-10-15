<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Licencia;
use App\Models\Empleado;
use App\Models\TipoLicencia;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Licencia>
 */
class LicenciaFactory extends Factory
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
            'tipo_licencia_id' => $this->faker->numberBetween(1, 5), // Cambia el rango según el número de tipos de licencia
            'fecha_inicio' => $this->faker->date(),
            'fecha_fin' => $this->faker->date(),
            'motivo' => $this->faker->randomElement(['Enfermedad', 'Calamidad doméstica', 'Accidente laboral', 'Vacaciones', 'otro_motivo']),
            'estado' => $this->faker->randomElement(['Aprobado', 'Pendiente', 'Rechazado']),
        ];
    }
}
