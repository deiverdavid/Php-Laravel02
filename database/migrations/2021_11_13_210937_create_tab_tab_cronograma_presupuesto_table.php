<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabTabCronogramaPresupuestoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_cronograma_presupuesto', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('actividad');
            $table->string('observaciones');
            $table->string('responsable');
            $table->double('presupuesto');
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
        Schema::dropIfExists('tab_cronograma_presupuesto');
    }
}
