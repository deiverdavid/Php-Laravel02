<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_proveedores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('razon_social');
            $table->string('NIT');
            $table->string('certificado_arl');
            $table->boolean('es_autorizado');
            $table->string('seguridad_social');
            $table->string('ficha_seg_productos');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->string('email');
            $table->string('tipo_empresa');
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
        Schema::dropIfExists('tab_proveedores');
    }
}
