<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id_cont');
            $table->string('pri_nombre',100);
            $table->string('seg_nombre',100)->nullable();
            $table->string('pri_apellido',100)->nullable();
            $table->string('seg_apellido',100)->nullable();
            $table->string('email',200)->unique();
            $table->string('telefono',15);
            $table->string('sexo',1)->nullable();
            $table->unsignedInteger('id_tipo');
            $table->unsignedInteger('id_pais');

            $table->foreign('id_tipo')->references('id_tipo')->on('tipocontacto');
            $table->foreign('id_pais')->references('id_pais')->on('pais');


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
        Schema::dropIfExists('contactos');
    }
}
