<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLenguajeProgramacionTable extends Migration
{

    public function up()
    {
        Schema::create('lenguaje_programacion', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('description', 45);
        });
    }


    public function down()
    {
        Schema::dropIfExists('lenguaje_programacion');
    }
}
