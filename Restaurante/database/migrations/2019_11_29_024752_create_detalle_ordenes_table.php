<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetalleOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ordenes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->Integer('idOrden')->unsigned();
            $table->Integer('idProducto')->unsigned();
            $table->integer('cantidad')->nullable();
            $table->integer('precio')->nullable();
            $table->foreign('idOrden')->references('id')->on('ordenes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idProducto')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_ordenes');
    }
}
