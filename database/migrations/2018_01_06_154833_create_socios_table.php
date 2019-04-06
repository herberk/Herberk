<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut',12)->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('fono')->nullable();
            $table->enum('rep_legal',['Si','No'])->nullable();
            $table->float('porcen',5,2);
            $table->double('apopago',12,0)->nullable();
            $table->double('apopend',12,0)->nullable();
            $table->double('aporte',12,0)->nullable();
            $table->text('notas')->nullable();
            $table->string('empNamCorto',10)->nullable();
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
        Schema::dropIfExists('socios');
    }
}
