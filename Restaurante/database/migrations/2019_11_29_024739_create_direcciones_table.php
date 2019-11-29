<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->Integer('idContacto')->unsigned();
            $table->integer('cp')->nullable();
            $table->string('municipio')->nullable();
            $table->string('estado')->nullable();
            $table->string('localidad')->nullable();
            $table->string('calle')->nullable();
            $table->integer('numeroInterior')->nullable();
            $table->integer('numeroExterior')->nullable();
            $table->integer('cruzamiento')->nullable();
            $table->foreign('idContacto')->references('id')->on('contactos')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('direcciones');
    }
}
