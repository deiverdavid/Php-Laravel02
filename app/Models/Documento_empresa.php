<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento_empresa extends Model
{
    use HasFactory;
    protected $table='tab_documentos_empresa';

    protected $fillable=['id',
    'id_tipo_documento',
    'titulo',
    'descripcion',
    'firma',
    'nombre_archivo',
    'fecha_vence',
    'observacion',
    'activo',];
}
