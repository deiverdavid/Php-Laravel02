<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $table='tab_roles';
    protected $fillable=[

        'id','nombre','responsabilidades','activo',
    ];

}
