<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peligro extends Model
{
    use HasFactory;
    protected $table='tab_peligros';
    protected $fillable = ['id','nombre','activo'];
}
