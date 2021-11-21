<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabActasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_actas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->smallInteger('tipo_acta');
            $table->bigInteger('id_comite');
            $table->string('titulo');
            $table->string('lugar');
            $table->string('descripcion');
            $table->longText('observacion');
            $table->string('nombre_archivo');
            $table->string('soportes');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
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
        Schema::dropIfExists('tab_actas');
    }
}
