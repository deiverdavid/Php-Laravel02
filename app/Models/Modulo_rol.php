<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo_rol extends Model
{
    use HasFactory;
    protected $table='tab_modulos_roles';

    protected $fillable=['id','id_rol','id_modulo',];
}
