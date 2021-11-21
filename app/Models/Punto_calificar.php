<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Punto_calificar extends Model
{
    use HasFactory;
    protected $table='tab_quejas';
    protected $fillable=['id','nombre','activo'];
}
