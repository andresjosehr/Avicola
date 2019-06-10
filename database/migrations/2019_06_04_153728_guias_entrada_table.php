<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GuiasEntradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias_entrada', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion_guia')->nullable();
            $table->string('fecha_entrada')->nullable();
            $table->string('id_proveedor')->nullable();
            $table->string('id_producto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guias_entrada');
    }
}
