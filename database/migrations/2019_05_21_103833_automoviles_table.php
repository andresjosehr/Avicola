<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AutomovilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automoviles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('placa')->nullable();
            $table->string('id_chofer')->nullable();
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
        Schema::dropIfExists('automoviles');
    }
}
