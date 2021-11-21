<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planeacion_capacitacion extends Model
{
    use HasFactory;
    protected $table='tab_planeacion_capacitacion';
    protected $fillable = [
        'id', 'id_capacitacion', 'fecha_planeacion',
        'fecha_cumplimiento', 'estado_actividad', 'archivo_soporte'
    ];
}
