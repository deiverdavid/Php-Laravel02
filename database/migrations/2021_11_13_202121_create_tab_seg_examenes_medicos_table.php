<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabSegExamenesMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_seg_examenes_medicos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fecha');
            $table->bigInteger('id_empleado');
            $table->date('fecha_examen');
            $table->string('tipo_examen');
            $table->longText('concepto_aptitud');
            $table->longText('aclaraciones_concepto');
            $table->string('sve_visual');
            $table->string('sve_pdme');
            $table->string('sve_auditivo');
            $table->string('sve_quimico_respiratorio');
            $table->string('sve_osteomuscular');
            $table->string('otro');
            $table->string('remision_medica');
            $table->string('tipo');
            $table->string('restricciones_laborales');
            $table->date('fecha_examen_periodico');
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
        Schema::dropIfExists('tab_seg_examenes_medicos');
    }
}
