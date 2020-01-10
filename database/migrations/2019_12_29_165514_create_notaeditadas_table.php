<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaeditadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notaeditadas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('notasolicitud_id')->unsigned();
            $table->foreign('notasolicitud_id')->references('id')->on('notasolicituds');
            $table->text('nota');
            $table->dateTime('fecha');
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
        Schema::dropIfExists('notaeditadas');
    }
}
