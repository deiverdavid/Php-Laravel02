<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cumpl_actividad_plan extends Model
{
    use HasFactory;
    protected $table='tab_cumpl_actividades_plan';
    protected $fillable=['id','id_actividad','mes','porcentaje_cumplimiento',
    'nombre_archivo','activo',];
}
