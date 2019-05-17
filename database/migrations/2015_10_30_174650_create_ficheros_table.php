<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFicherosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficheros', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('glosa');
            $table->integer('size');
            $table->string('extension');
            $table->string('public_url');
            $table->integer('Categoriupload_id')->unsigned();
            $table->foreign('Categoriupload_id')->references('id')->on('Categoriupload');
            $table->integer('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->softDeletes();
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
        Schema::drop('ficheros');
    }

}
