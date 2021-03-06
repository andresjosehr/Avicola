<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GuiasPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias_pedido', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion_guia')->nullable();
            $table->string('fecha_entrega')->nullable();
            $table->string('id_guia_salida')->nullable();
            $table->string('merma_total')->nullable();
            $table->string('peso_total_vendido')->nullable();
            $table->string('precio_total_vendido')->nullable();
            $table->string('cartones_devueltos')->nullable();
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
        Schema::dropIfExists('guias_pedido');
    }
}
