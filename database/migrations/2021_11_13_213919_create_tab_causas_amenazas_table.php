<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabCausasAmenazasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_causas_amenazas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_empleado');
            $table->boolean('es_interno');
            $table->string('calificacion');
            $table->string('resultado');
            $table->string('area_afectada');
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
        Schema::dropIfExists('tab_causas_amenazas');
    }
}
