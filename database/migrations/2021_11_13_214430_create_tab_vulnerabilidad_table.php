<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabVulnerabilidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_vulnerabilidad', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_amenaza');
            $table->string('categoria');
            $table->string('subcategoria');
            $table->bigInteger('id_punto_calificar');
            $table->boolean('valor');
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
        Schema::dropIfExists('tab_vulnerabilidad');
    }
}
