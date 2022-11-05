<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriptomonedasTable extends Migration
{

    public function up()
    {
        Schema::create('criptomonedas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lenguaje_id');
            $table->string('logotipo', 105);
            $table->string('nombre', 75);
            $table->bigInteger('precio');
            $table->string('descripcion', 200);
            $table->date('fecha_creacion');
            $table->foreign('lenguaje_id')->references('id')->on('lenguaje__programacion');
        });
    }


    public function down()
    {
        Schema::dropIfExists('criptomonedas');
    }
}
