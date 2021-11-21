<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
    use HasFactory;
    protected $table = 'tab_indicadores';
    protected $fillable = [
        'id', 'tipo_indicador', 'nombre', 'definicion', 'metodo_calculo',
        'unidad_medida', 'fuente_informacion', 'clasificacion',
        'frecuencia_medición', 'meta_anual', 'interpretacion_resultado',
        'responsable', 'deben_conocer_resultado', 'responsable', 'activo',
    ];
}
