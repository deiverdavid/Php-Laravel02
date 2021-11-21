<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabActividadesPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_actividades_plan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_plan');
            $table->string('etapa_phva');
            $table->longText('actividad');
            $table->bigInteger('id_equipo_responsable');
            $table->longText('recursos');
            $table->string('periodicidad');
            $table->date('fecha_planeacion');
            $table->date('fecha_cumplimiento');
            $table->integer('estado_actividad');
            $table->string('nombre_archivo');
            $table->boolean('activo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tab_actividades_plan');
    }
}
