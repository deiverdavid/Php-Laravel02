<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabAccidentalidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_accidentalidad', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fecha');
            $table->bigInteger('id_empleado');
            $table->integer('dias_incapacidad');
            $table->string('cie10');
            $table->string('diagnostico');
            $table->string('descripcion_accidente');
            $table->bigInteger('id_peligro_asociado');
            $table->string('tipo_accidente');
            $table->string('parte_cuerpo_afectada');
            $table->string('mecanismo_accidente');
            $table->string('agente_accidente');
            $table->string('tipo_lesion');
            $table->string('causa_basica');
            $table->string('causa_inmediata');
            $table->string('medidas_intervencion');
            $table->integer('cumplimiento');
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
        Schema::dropIfExists('tab_accidentalidad');
    }
}
