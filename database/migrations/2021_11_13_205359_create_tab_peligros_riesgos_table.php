<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabPeligrosRiesgosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_peligros_riesgos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_actividad');
            $table->string('clasificacion');
            $table->string('subclasificacion');
            $table->string('efectos_posibles');
            $table->integer('tiempo_exposicion');
            $table->integer('te_directos');
            $table->integer('te_indirectos');
            $table->string('fuente');
            $table->string('medio');
            $table->string('trabajador');
            $table->integer('nd');
            $table->integer('ne');
            $table->integer('np');
            $table->string('nivel_probabilidad');
            $table->integer('nivel_consecuencia');
            $table->integer('nivel_riesgo');
            $table->string('interpretacion_nr');
            $table->string('aceptabilidad_riesgo');
            $table->string('peor_consecuencia');
            $table->string('eliminacion');
            $table->string('sustitucion');
            $table->string('control_ingenieria');
            $table->string('controles_admin');
            $table->string('equipo_elementos_pp');
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
        Schema::dropIfExists('tab_peligros_riesgos');
    }
}
