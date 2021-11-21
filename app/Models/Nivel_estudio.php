<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel_estudio extends Model
{
    use HasFactory;
    protected $table='tab_niveles_estudio';
    protected $fillable=['id','nombre','activo',];
}
