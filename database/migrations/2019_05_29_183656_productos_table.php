<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion')->nullable();
            $table->string('descripcion_corta')->nullable();
            $table->string('peso')->nullable();
            // $table->string('id_proveedor')->nullable();
            $table->string('id_tipo_producto')->nullable();
            $table->string('id_guia_entrada')->nullable();
            $table->string('id_guia_pedido')->nullable();
            $table->string('estatus')->nullable()->default("0");
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
        Schema::dropIfExists('productos');
    }
}
