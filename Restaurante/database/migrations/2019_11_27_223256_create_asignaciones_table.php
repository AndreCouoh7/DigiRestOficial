<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('fechaAsignacion')->nullable();
            $table->Integer('idMesa')->unsigned();
            $table->Integer('idMesero')->unsigned();
            $table->foreign('idMesa')->references('id')->on('mesas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idMesero')->references('id')->on('meseros')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('asignaciones');
    }
}
