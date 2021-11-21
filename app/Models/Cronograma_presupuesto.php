<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cronograma_presupuesto extends Model
{
    use HasFactory;
    protected $table = 'tab_cronograma_presupuesto';
    protected $fillable = ['id', 'actividad', 'observaciones', 'responsable', 'presupuesto', 'activo'];
}
