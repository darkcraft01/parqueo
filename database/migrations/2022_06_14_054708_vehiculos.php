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

        Schema::create('vehiculos', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('cliente_id')->unsigned();
            $table->string('tipo_vehiculo');
            $table->string('placa_vehiculo');
            $table->string('modelo');
            $table->string('marca');
            $table->string('color');

            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete("cascade");
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
