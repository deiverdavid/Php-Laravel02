<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividades_peligro extends Model
{
    use HasFactory;
    protected $table='tab_actividades_peligros';
    protected $fillable=['id','area','proceso','descripcion','es_rutinaria','activo',
    ];
}
