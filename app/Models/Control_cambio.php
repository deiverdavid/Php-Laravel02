<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Control_cambio extends Model
{
    use HasFactory;
    protected $table='tab_control_cambios';
    protected $fillable=['id','norma','descripcion','responsable_mod','fecha_publicacion'];
}
