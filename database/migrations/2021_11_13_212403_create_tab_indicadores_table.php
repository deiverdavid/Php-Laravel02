<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabIndicadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_indicadores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('tipo_indicador');
            $table->string('nombre');
            $table->string('definicion');
            $table->string('metodo_calculo');
            $table->string('unidad_medida');
            $table->string('fuente_informacion');
            $table->string('clasificacion');
            $table->string('frecuencia_medición');
            $table->double('meta_anual');
            $table->string('interpretacion_resultado');
            $table->string('responsable');
            $table->string('deben_conocer_resultado');
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
        Schema::dropIfExists('tab_indicadores');
    }
}
