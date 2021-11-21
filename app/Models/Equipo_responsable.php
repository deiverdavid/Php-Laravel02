<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo_responsable extends Model
{
    use HasFactory;
    protected $table='tab_equipo_responsable';
    protected $fillable=['id','nombre_equipo','activo',];
}
