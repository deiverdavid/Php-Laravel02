<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;
    protected $table='tab_proveedores';
    protected $fillable = ['id',
    'razon_social',
    'NIT',
    'certificado_arl',
    'es_autorizado',
    'seguridad_social',
    'ficha_seg_productos',
    'telefono1',
    'telefono2',
    'email',
    'tipo_empresa',
    'activo'];
}
