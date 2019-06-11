<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UnidadesProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('peso')->nullable();
            $table->string('id_guia_entrada')->nullable();
            $table->string('id_guia_pedido')->nullable();
            $table->string('id_guia_salida')->nullable();
            $table->string('id_producto')->nullable();
            $table->string('estatus')->nullable();
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
        Schema::dropIfExists('unidades_productos');
    }
}
