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

        Schema::create('clientes', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('ci');
            $table->date('fecha_nac');
            $table->string('telefono');
            $table->string('direccion');

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
