<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queja extends Model
{
    use HasFactory;
    protected $table='tab_quejas';
    protected $fillable=['id',
    'id_empleado',
    'nombre',
    'descripcion',
    'nombre_archivo',
    'observacion',
    'activo',
];
}
