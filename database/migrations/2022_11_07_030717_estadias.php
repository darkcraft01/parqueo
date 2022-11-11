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
        //

        Schema::create('estadias', function (Blueprint $table) {
            
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('cochera_id')->unsigned()->nullable();
            $table->bigInteger('vehiculo_id')->unsigned()->nullable();
            $table->bigInteger('usuario_id')->unsigned()->nullable();
            $table->bigInteger('precio_id')->unsigned()->nullable();
            $table->string('estado')->nullable();
            $table->date('fecha_ingreso')->nullable();
            $table->time('hora_ingreso')->nullable();
            $table->date('fecha_salida')->nullable();
            $table->time('hora_salida')->nullable();

            $table->foreign('cochera_id')->references('id')->on('cocheras')->onDelete("set null");
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete("set null");
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete("set null");
            $table->foreign('precio_id')->references('id')->on('cocheras')->onDelete("set null");
            
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
        //
    }
};
