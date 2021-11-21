<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado_acta extends Model
{
    use HasFactory;
    protected $table='tab_empleados_actas';
    protected $fillable=[ 'id',
    'id_empleado',
    'id_acta',
    'es_candidato',
    'observacion',
    'activo'];
}
