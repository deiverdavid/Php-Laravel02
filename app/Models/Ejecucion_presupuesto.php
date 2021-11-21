<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejecucion_presupuesto extends Model
{
    use HasFactory;
    protected $table = 'tab_ejecucion_presupuesto';
    protected $fillable = [
        'id', 'id_actividad', 'fecha', 'factura', 'id_proveedor',
        'cantidad', 'vr_uni_sin_iva', 'vr_iva', 'vr_total', 'activo'
    ];
}
