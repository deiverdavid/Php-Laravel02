<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estructura_sgsst extends Model
{
    use HasFactory;
    protected $table='tab_estructura_sgsst';

    protected $fillable=['id',
    'nombre',
    'activo',
    'abreviatura',];
}
