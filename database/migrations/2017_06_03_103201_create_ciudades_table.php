<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->decimal('longitud',20,14);
            $table->decimal('latitud',20,14);
            $table->string('texto',50);
            $table->integer('provincia_id')->unsigned();
            $table->foreign('provincia_id')
                  ->references('id')
                  ->on('provincias')
                  ->onDelete('cascade');
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
        Schema::drop('ciudades');
    }
}
