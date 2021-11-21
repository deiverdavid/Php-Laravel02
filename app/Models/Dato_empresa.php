<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato_empresa extends Model
{
    use HasFactory;
    protected $table='tab_datos_empresa';

    protected $fillable=['id',
    'razon_social',
    'NIT',
    'longitud',
    'latitud',
    'actividad_economica',
    'id_sector_economico',
    'nivel_riesgo',
    'cantidad_trabajadores',
    'naturaleza_juridica',
    'telefono1',
    'telefono2',
    'telefono3',
    'direccion',
    'email',
    'pagina_web',
    'tipo_empresa',
    'activo',];
}
