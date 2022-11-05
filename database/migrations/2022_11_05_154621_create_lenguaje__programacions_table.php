<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLenguajeProgramacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lenguaje__programacion', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 45);

        });
    }


    public function down()
    {
        Schema::dropIfExists('lenguaje__programacion');
    }
}
