<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elemento_proveedor extends Model
{
    use HasFactory;
    protected $table='tab_elementos_proveedor';

    protected $fillable=['id',
    'id_proveedor',
    'id_elemento',
    'vida_util',
    'activo',];
}
