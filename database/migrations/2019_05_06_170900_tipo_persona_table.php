<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_persona', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            // $table->integer('id_formulario')->unsigned();
            // $table->foreign('id_formulario')->references('id')->on('formularios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_persona');
    }
}
