<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alumnos extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        //
        Schema::create('alumnos', function (Blueprint $table) {
            
            $table->engine="InnoDB";

            $table->bigIncrements('id');

            $table->bigInteger('curso_id')->unsigned();

            $table->string('nombre');
            $table->string('apellidos');
            $table->string('dni');
            $table->string('email');
            $table->integer('telefono');
            
            $table->timestamps();

            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete("cascade");


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        //
    }
};
