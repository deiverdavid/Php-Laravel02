<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vulnerabilidad extends Model
{
    use HasFactory;
    protected $table = 'tab_usuarios_roles';
    protected $fillable = [
        'id', 'id_amenaza', 'categoria', 'subcategoria',
        'id_punto_calificar', 'valor', 'activo'
    ];
}
