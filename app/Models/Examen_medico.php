<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen_medico extends Model
{
    use HasFactory;
    protected $table = 'tab_examenes_medicos';

    protected $fillable = [
        'id', 'id_actividad', 'clasificacion', 'subclasificacion', 'efectos_posibles', 'fuente',
        'medio', 'individuo', 'nd', 'ne', 'np', 'nivel_probabilidad', 'nivel_consecuencia', 'nivel_riesgo',
        'aceptabilidad_riesgo', 'planta', 'mision', 'practicantes', 'interpretacion_nr', 'peor_consecuencia',
        'exist_requisito_legal',
        'eliminacion', 'sustitucion', 'control_ingenieria', 'equipo_elementos_pp', 'activo'
    ];
}
