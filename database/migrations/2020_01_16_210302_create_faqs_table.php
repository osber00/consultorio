<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();     
            $table->integer('category_id')->unsigned(); 
            $table->string('pregunta',128);
            $table->string('titulo_caso',128); 
            $table->string('slug',128)->unique();            
            $table->text('descripcion_caso');
            $table->text('que_hacer');
            $table->text('donde_acudir');
            $table->text('alternativa');
            $table->text('tener_cuenta');
            $table->enum('status',['PUBLISHED', 'DRAFT'])->default('DRAFT');

            $table->foreign('category_id')->references('id')->on('categorias');
            

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
        Schema::dropIfExists('faqs');
    }
}
