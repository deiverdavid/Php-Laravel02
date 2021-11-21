<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabDocumentosEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_documentos_empresa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->smallInteger('id_tipo_documento');
            $table->string('titulo');
            $table->longText('descripcion');
            $table->string('firma');
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
        Schema::dropIfExists('tab_documentos_empresa');
    }
}
