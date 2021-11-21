<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabAcpmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_acpm', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('tipo_accion');
            $table->string('descripcion_situacion');
            $table->string('descripcion_accion');
            $table->string('nombre_archivo');
            $table->string('archivo_correccion');
            $table->bigInteger('id_empleado');
            $table->string('responsable_solicitud');
            $table->double('analisis_causas');
            $table->string('costo_correccion');
            $table->string('accion_correctiva');
            $table->date('fecha_accion');
            $table->date('fecha_implementacion');
            $table->date('fecha_verificacion');
            $table->date('fecha_observaciones');
            $table->string('estado_actividad');
            $table->string('eficacia');
            $table->string('proceso');
            $table->string('tema');
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
        Schema::dropIfExists('tab_acpm');
    }
}
