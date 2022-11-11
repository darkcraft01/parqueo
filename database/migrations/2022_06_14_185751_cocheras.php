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
        Schema::create('cocheras', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            
            $table->bigIncrements('id');
            $table->string('numero_cochera')->unique();
            $table->string('medida');
            $table->double('precio', 8, 2);
            $table->string('tiempo');
            $table->string('tipo_espacio');
            $table->string('estado');

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
