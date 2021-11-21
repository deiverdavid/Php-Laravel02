<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabDocumentosEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_documentos_empleado', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_empleado');
            $table->bigInteger('id_tipo_documento');
            $table->string('nombre_archivo');
            $table->date('fecha_vence');
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
        Schema::dropIfExists('tab_documentos_empleado');
    }
}
