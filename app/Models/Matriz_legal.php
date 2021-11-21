<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matriz_legal extends Model
{
    use HasFactory;
    protected $table = 'tab_matriz_legal';
    protected $fillable = [
        'id', 'tipo', 'sector_economico', 'clasificacion',
        'tema_general', 'subtema', 'año', 'tipo_num', 'fecha', 'expedida_por', 'descripcion_norma',
        'articulo', 'estado', 'info', 'descripcion_art'
    ];
}
