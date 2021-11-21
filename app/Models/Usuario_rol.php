<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario_rol extends Model
{
    use HasFactory;
    protected $table='tab_usuarios_roles';
    protected $fillable=[
        'id','id_usuario','id_rol','fecha_desde','fecha_hasta','activo',
    ];
}
