<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabModulosRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_modulos_roles', function (Blueprint $table) {
            $table->id('id_rol','id_modulo');
            $table->timestamps();
            //$table->bigInteger('id_rol');
            //$table->bigInteger('id_modulo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tab_modulos_roles');
    }
}
