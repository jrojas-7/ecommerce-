<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('forma_de_pago_id');
            $table->unsignedTinyInteger('cantidad');
            $table->decimal('pu', 8, 2);
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('forma_de_pago_id')->references('id')->on('formas_de_pago');
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
        Schema::dropIfExists('ventas');
    }
}
