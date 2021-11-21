<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Causa_amenaza extends Model
{
    use HasFactory;

    protected $table='tab_causas_amenazas';
    protected $fillable=[ 'id','id_empleado','es_interno','calificacion','resultado','area_afectada','activo'];
}
