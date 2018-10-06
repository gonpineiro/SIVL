<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAmbientesRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ambientes', function (Blueprint $table) {
          $table->foreign('prototype_id')->references('id')->on('marcas');
          $table->foreign('dispositivo_id')->references('id')->on('variedades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ambientes', function (Blueprint $table) {
          $table->dropForeign('ambientes_prototype_id_foreign');
          $table->dropForeign('ambientes_dispositivo_id_foreign');
        });
    }
}
