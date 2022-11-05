<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriptomonedaTable extends Migration
{

    public function up()
    {
        Schema::create('criptomoneda', function (Blueprint $table) {
            $table->id();
            $table->string('logotipo', 105);
            $table->string('nombre', 75);
            $table->string('descripcion', 200);
            $table->integer('lenguaje_id');
            $table->date('fecha_creacion');


            $table->foreign('lenguaje_id')->references('id')->on('lenguaje_programacion');
        });

        Schema::table('criptomoneda', function (Blueprint $table) {
            DB::statement('alter table `criptomoneda` add column `precio` float after nombre');
        });
    }


    public function down()
    {
        Schema::dropIfExists('criptomoneda');
    }
}
