<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan_anual extends Model
{
    use HasFactory;
    protected $table='tab_plan_anual';
    protected $fillable = ['id','año','observacion','metas','alcance','activ_planeadas',
    'activ_cumplidas','activ_no_cumplidas','nombre_archivo','activo',];
}
