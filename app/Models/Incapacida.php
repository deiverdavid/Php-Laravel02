<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incapacida extends Model
{
    use HasFactory;
    protected $table = 'tab_incapacidades';

    protected $fillable = [
        'id', 'id_empleado', 'tipo_incapacidad', 'codigo',
        'diagnostico', 'grupo_dx', 'seg_osteomuscular', 'origen', 'clasificacion',
        'fecha_inicio', 'fecha_fin', 'salario_base', 'salario_dia', 'total_dias',
        'eps', 'nombre_arl', 'valor_incapacidad', 'valor_asumido_emp', 'valor_asumido_eps'
    ];
}
