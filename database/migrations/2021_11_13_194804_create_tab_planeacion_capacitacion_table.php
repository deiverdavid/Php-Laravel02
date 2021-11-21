<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabPlaneacionCapacitacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_planeacion_capacitacion', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_capacitacion');
            $table->date('fecha_planeacion');
            $table->date('fecha_cumplimiento');
            $table->integer('estado_actividad');
            $table->string('archivo_soporte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tab_planeacion_capacitacion');
    }
}
