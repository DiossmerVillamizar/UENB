<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('segundo_nombre');
            $table->string('apellido');
            $table->string('segundo_apellido');
            $table->string('cedula');
            $table->string('email');
            $table->string('fecha_nacimiento');
            $table->string('trabajo');
            $table->string('grado_instruccion');
            $table->string('profesion_ocupacion');
            $table->string('lugar_trabajo');
            $table->string('telefono');
            $table->string('sexo');
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
        Schema::dropIfExists('representantes');
    }
}
