<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabElementosProveedorPpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_elementos_proveedor', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_proveedor');
            $table->bigInteger('id_elemento');
            $table->integer('vida_util');
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
        Schema::dropIfExists('tab_elementos_proveedor');
    }
}
