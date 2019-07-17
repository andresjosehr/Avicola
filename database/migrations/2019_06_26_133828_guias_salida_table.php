<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GuiasSalidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias_salida', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion_guia')->nullable();
            $table->string('fecha_entrega')->nullable();
            $table->string('id_empleado')->nullable();
            $table->string('id_automovil')->nullable();
            $table->string('acompanante_1')->nullable();
            $table->string('acompanante_2')->nullable();
            $table->string('acompanante_3')->nullable();
            $table->string('acompanante_4')->nullable();
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
        Schema::dropIfExists('guias_salida');
    }
}