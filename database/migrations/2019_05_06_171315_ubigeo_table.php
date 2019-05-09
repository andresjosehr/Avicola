<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UbigeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubigeo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_ubigeo');
            $table->string('departamento');
            $table->string('provincia');
            $table->string('distrito');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubigeo');
    }
}
