<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabCumplActividadesPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_cumpl_actividades_plan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_actividad');
            $table->integer('mes');
            $table->double('porcentaje_cumplimiento');
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
        Schema::dropIfExists('tab_cumpl_actividades_plan');
    }
}
