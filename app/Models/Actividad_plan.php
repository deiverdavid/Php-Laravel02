<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad_plan extends Model
{
    use HasFactory;
    protected $table='tab_areas';
    protected $fillable=['id','id_plan','etapa_phva','actividad',
    'id_equipo_responsable','recursos','periodicidad','fecha_planeacion',
    'fecha_cumplimiento','estado_actividad','nombre_archivo','activo'];
}
