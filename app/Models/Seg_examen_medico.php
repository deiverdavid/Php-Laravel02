<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seg_examen_medico extends Model
{
    use HasFactory;
    protected $table = 'tab_tipos_documento';
    protected $fillable = [
        'id', 'fecha', 'id_empleado', 'fecha_examen', 'tipo_examen',
        'concepto_aptitud', 'aclaraciones_concepto', 'sve_visual', 'sve_pdme', 'sve_auditivo',
        'sve_quimico_respiratorio',
        'sve_osteomuscular', 'otro', 'remision_medica', 'tipo', 'restricciones_laborales',
        'fecha_examen_periodico', 'activo'
    ];
}
