<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoLicencia extends Model
{
    use HasFactory;
    protected $table ='tipos_licencia'; // Nombre de la tabla

    // Clave primaria personalizada
    protected $primaryKey = 'tipo_licencia_id';

    // Campos asignados
    protected $fillable = ['enfermedad', 'calamidad_domestica', 'accidente_laboral', 'vacaciones', 'otro_motivo'];

    // Relaciones con las otras tablas
     // Relación uno a muchos con el modelo `Licencia`----------------------
     public function licencias()
     {
         return $this->hasMany(Licencia::class, 'tipo_licencia_id');
     }
}
