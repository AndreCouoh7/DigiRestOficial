<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('cantidadPago')->nullable();
            $table->date('fechaPago')->nullable();
            $table->Integer('idCajero')->unsigned();
            $table->Integer('idCliente')->unsigned();
            $table->Integer('idTicket')->unsigned();
            $table->foreign('idCajero')->references('id')->on('cajeros')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idTicket')->references('id')->on('tickets')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pagos');
    }
}
