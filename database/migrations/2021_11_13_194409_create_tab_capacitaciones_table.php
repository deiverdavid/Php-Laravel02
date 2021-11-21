<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabCapacitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_capacitaciones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tipo_capacitacion');
            $table->longText('descripcion');
            $table->bigInteger('id_empleado');
            $table->string('responsable');
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
        Schema::dropIfExists('tab_capacitaciones');
    }
}
