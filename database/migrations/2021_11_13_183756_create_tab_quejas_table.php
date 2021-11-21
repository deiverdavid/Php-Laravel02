<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabQuejasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_quejas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_empleado');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('nombre_archivo');
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
        Schema::dropIfExists('tab_quejas');
    }
}
