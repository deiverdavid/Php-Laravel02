<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabActividadesPeligrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_actividades_peligros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('area');
            $table->string('proceso');
            $table->string('descripcion');
            $table->boolean('es_rutinaria');
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
        Schema::dropIfExists('tab_actividades_peligros');
    }
}
