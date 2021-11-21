<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo_elemento extends Model
{
    use HasFactory;
    protected $table='tab_cargos_elementos';
    protected $fillable=['id',
    'id_cargo',
    'id_elemento',];
}
