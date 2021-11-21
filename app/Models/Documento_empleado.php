<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento_empleado extends Model
{
    use HasFactory;
    protected $table='tab_documentos_empleado';

    protected $fillable=['id','id_empleado','id_tipo_documento',
    'nombre_archivo','fecha_vence','observacion','activo',];
}
