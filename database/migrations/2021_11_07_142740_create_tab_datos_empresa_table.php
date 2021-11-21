<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabDatosEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_datos_empresa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('razon_social');
            $table->string('NIT');
            $table->string('longitud');
            $table->string('latitud');
            $table->string('actividad_economica');
            $table->bigInteger('id_sector_economico');
            $table->string('nivel_riesgo');
            $table->integer('cantidad_trabajadores');
            $table->string('naturaleza_juridica');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->string('telefono3');
            $table->string('direccion');
            $table->string('email');
            $table->string('pagina_web');
            $table->string('tipo_empresa');
            $table->string('activo');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tab_datos_empresa');
    }
}
