<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabExamenesMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_examenes_medicos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_actividad');
            $table->string('clasificacion');
            $table->string('subclasificacion');
            $table->string('efectos_posibles');
            $table->string('fuente');
            $table->string('medio');
            $table->string('individuo');
            $table->integer('nd');
            $table->integer('ne');
            $table->integer('np');
            $table->string('nivel_probabilidad');
            $table->integer('nivel_consecuencia');
            $table->integer('nivel_riesgo');
            $table->integer('aceptabilidad_riesgo');
            $table->integer('planta');
            $table->integer('mision');
            $table->integer('practicantes');
            $table->string('interpretacion_nr');
            $table->string('peor_consecuencia');
            $table->string('exist_requisito_legal');
            $table->string('eliminacion');
            $table->string('sustitucion');
            $table->string('control_ingenieria');
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
        Schema::dropIfExists('tab_examenes_medicos');
    }
}
