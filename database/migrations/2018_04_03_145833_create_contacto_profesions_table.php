<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactoProfesionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto_profesion', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_cont');
            $table->unsignedInteger('id_prof');

            $table->foreign('id_cont')->references('id_cont')->on('contactos');
            $table->foreign('id_prof')->references('id_prof')->on('profesion');


            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacto_profesion');
    }
}
