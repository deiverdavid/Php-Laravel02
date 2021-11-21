<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabMatrizLegalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_matriz_legal', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('tipo');
            $table->string('sector_economico');
            $table->string('clasificacion');
            $table->string('tema_general');
            $table->string('subtema');
            $table->integer('año');
            $table->string('tipo_num');
            $table->date('fecha');
            $table->string('expedida_por');
            $table->string('descripcion_norma');
            $table->string('articulo');
            $table->string('estado');
            $table->string('info');
            $table->string('descripcion_art');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tab_matriz_legal');
    }
}
