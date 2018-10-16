<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedidorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medidor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('identy')->unsigned();
            $table->decimal('temperatura',5,2);
            $table->decimal('humedad',5,2);
            $table->boolean('estado_luz');
            $table->boolean('estado_tiempo');
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
        Schema::dropIfExists('medidor');
    }
}
