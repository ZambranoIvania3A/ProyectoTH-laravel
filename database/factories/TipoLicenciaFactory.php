<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TipoLicencia;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TipoLicencia>
 */
class TipoLicenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'enfermedad' => $this->faker->word,
            'calamidad_domestica' => $this->faker->word,
            'accidente_laboral' => $this->faker->word,
            'vacaciones' => $this->faker->word,
            'otro_motivo' => $this->faker->word,
        ];
    }
}
