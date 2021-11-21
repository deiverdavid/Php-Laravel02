<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabIncapacidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_incapacidades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_empleado');
            $table->string('tipo_incapacidad');
            $table->string('codigo');
            $table->string('diagnostico');
            $table->string('grupo_dx');
            $table->string('seg_osteomuscular');
            $table->string('origen');
            $table->string('clasificacion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->double('salario_base');
            $table->double('salario_dia');
            $table->smallInteger('total_dias');
            $table->string('eps');
            $table->string('nombre_arl');
            $table->double('valor_incapacidad');
            $table->double('valor_asumido_emp');
            $table->double('valor_asumido_eps');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tab_incapacidades');
    }
}
