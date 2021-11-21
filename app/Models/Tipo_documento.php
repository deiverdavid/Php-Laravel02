<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_documento extends Model
{
    use HasFactory;
    protected $table='tab_tipos_documento';
    protected $fillable=['id','nombre','activo',];
}
