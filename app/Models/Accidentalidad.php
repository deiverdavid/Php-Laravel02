<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accidentalidad extends Model
{
    use HasFactory;
    protected $table = 'tab_accidentalidad';
    protected $fillable = [
        'id', 'fecha', 'id_empleado', 'dias_incapacidad',
        'cie10', 'diagnostico', 'descripcion_accidente', 'id_peligro_asociado', 'tipo_accidente',
        'parte_cuerpo_afectada',
        'mecanismo_accidente', 'agente_accidente', 'tipo_lesion', 'causa_basica', 'causa_inmediata',
        'medidas_intervencion',
        'cumplimiento', 'activo'
    ];
}
