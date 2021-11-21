<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabEmpleadosActasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_empleados_actas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_empleado');
            $table->bigInteger('id_acta');
            $table->boolean('es_candidato');
            $table->longText('observacion');
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
        Schema::dropIfExists('tab_empleados_actas');
    }
}
