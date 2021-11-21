<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acta extends Model
{
    use HasFactory;
    protected $table='tab_actas';
    protected $fillable=['id',
    'tipo_acta',
    'id_comite',
    'titulo',
    'lugar',
    'descripcion',
    'observacion',
    'nombre_archivo',
    'soportes',
    'fecha_inicio',
    'fecha_fin',
    'activo',];
}
