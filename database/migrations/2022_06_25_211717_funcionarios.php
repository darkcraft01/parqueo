<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('cargo_id')->unsigned();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('ci');
            $table->string('fecha_nac');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('horario');

            $table->timestamps();

            $table->foreign('cargo_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
