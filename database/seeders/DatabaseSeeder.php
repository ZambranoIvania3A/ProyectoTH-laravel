<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            DepartamentoSeeder::class,
            UbicacionSeeder::class,
            AreaSeeder::class,
            TipoLicenciaSeeder::class,
            CargoSeeder::class,
            JornadaLaboralSeeder::class,
            EmpleadoSeeder::class,
            ContratoSeeder::class,
            FormacionAcademicaSeeder::class,
            HistorialLaboralSeeder::class,
            LicenciaSeeder::class,
            RolPagoSeeder::class,
            SancionSeeder::class,
            EvaluacionDesempenoSeeder::class,
            ReclutamientoSeeder::class,
            UserSeeder::class,
        ]);



        User::factory()->create([
           'name' => 'Test User',
            'correo' => 'test@example.com',
        ]);
    }
}
