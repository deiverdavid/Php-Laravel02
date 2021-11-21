<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peligro_riesgo extends Model
{
    use HasFactory;
    protected $table = 'tab_peligros';
    protected $fillable = [
        'id', 'id_actividad', 'clasificacion', 'subclasificacion',
        'efectos_posibles', 'tiempo_exposicion', 'te_directos', 'te_indirectos', 'fuente', 'medio',
        'trabajador', 'nd', 'ne', 'np', 'nivel_probabilidad', 'nivel_consecuencia', 'nivel_riesgo',
        'interpretacion_nr', 'aceptabilidad_riesgo', 'peor_consecuencia', 'eliminacion', 'sustitucion',
        'control_ingenieria', 'controles_admin', 'equipo_elementos_pp', 'activo'
    ];
}
