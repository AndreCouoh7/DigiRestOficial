<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMeserosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meseros', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->Integer('idUsuario')->unsigned();
            $table->foreign('idUsuario')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('meseros');
    }
}
