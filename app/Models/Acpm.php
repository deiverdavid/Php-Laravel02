<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acpm extends Model
{
    use HasFactory;
    protected $table='tab_acpm';
    protected $fillable = [
        'id', 'tipo_accion', 'descripcion_situacion',
        'descripcion_accion', 'nombre_archivo', 'archivo_correccion', 'id_empleado',
        'responsable_solicitud', 'analisis_causas', 'costo_correccion', 'accion_correctiva', 'fecha_accion',
        'fecha_implementacion', 'fecha_verificacion', 'fecha_observaciones', 'estado_actividad',
        'eficacia', 'proceso',
        'tema', 'activo',
    ];
}
