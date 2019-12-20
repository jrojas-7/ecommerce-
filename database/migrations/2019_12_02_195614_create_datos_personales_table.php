<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosPersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_personales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 60);
            $table->string('apellido', 60);
            $table->string('direccion', 60)->nullable();
            $table->date('fecha_de_nacimiento')->nullable();
            $table->string('telefono', 20)->nullable();
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
        Schema::dropIfExists('datos_personales');
    }
}
