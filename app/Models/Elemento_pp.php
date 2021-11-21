<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elemento_pp extends Model
{
    use HasFactory;
    protected $table='tab_elementos_pp';
    protected $fillable=['id','nombre','imagen','activo',];
}
