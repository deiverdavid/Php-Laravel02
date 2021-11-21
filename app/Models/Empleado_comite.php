<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado_comite extends Model
{
    use HasFactory;
    protected $table='tab_empleados_comites';

    protected $fillable=['id',
    'id_empleado',
    'id_comite',
    'perfil',
    'descripcion',
    'nombre_archivo',
    'fecha_inicio',
    'fecha_fin',
    'activo',];
}
