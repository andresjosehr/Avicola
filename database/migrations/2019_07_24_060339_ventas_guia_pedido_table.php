<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VentasGuiaPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas_guias_pedido', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_guia_pedido')->nullable();
            $table->string('cliente')->nullable();
            $table->string('precio')->nullable();
            $table->string('peso')->nullable();
            $table->string('precio_vendido')->nullable();
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
        Schema::dropIfExists('ventas_guias_pedido');
    }
}
