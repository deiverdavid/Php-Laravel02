<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabUsuariosRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_usuarios_roles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_usuario');
            $table->bigInteger('id_rol');
            $table->date('fecha_desde');
            $table->date('fecha_hasta');
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
        Schema::dropIfExists('tab_usuarios_roles');
    }
}
