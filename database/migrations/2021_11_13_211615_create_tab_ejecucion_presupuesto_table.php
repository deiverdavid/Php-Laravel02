<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabEjecucionPresupuestoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_ejecucion_presupuesto', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_actividad');
            $table->date('fecha');
            $table->string('factura');
            $table->bigInteger('id_proveedor');
            $table->double('cantidad');
            $table->double('vr_uni_sin_iva');
            $table->double('vr_iva');
            $table->double('vr_total');
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
        Schema::dropIfExists('tab_ejecucion_presupuesto');
    }
}
