<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    use HasFactory;
    protected $table = 'tab_cargos_elementos';
    protected $fillable = [
        'id', 'tipo_capacitacion', 'descripcion',
        'id_empleado', 'responsable', 'activo'
    ];
}
