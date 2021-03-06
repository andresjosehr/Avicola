<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
           $table->increments('id');
            $table->string('codigo');
            $table->string('tipo_persona');
            $table->string('tipo_documento');
            $table->string('apellido_materno');
            $table->string('apellido_paterno');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('direccion_2')->nullable();
            $table->string('codigo_postal');
            $table->string('codigo_ubigeo')->nullable();
            $table->string('pais');
            $table->string('estado')->default(0);
            $table->string('id_cliente')->nullable();
            $table->string('id_proveedor')->nullable();
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
        Schema::dropIfExists('contactos');
    }
}
