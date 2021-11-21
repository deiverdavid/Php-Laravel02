<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accion_queja extends Model
{
    use HasFactory; 
    protected $table='tab_acciones_quejas';
    protected $fillable=['id',
    'id_queja',
    'nombre',
    'descripcion',
    'nombre_archivo',
    'observacion',
    'activo'];
}
