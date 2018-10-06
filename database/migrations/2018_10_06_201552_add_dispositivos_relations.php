<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDispositivosRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dispositivos', function (Blueprint $table) {
          $table->foreign('sensor_id')->references('id')->on('marcas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dispositivos', function (Blueprint $table) {
            $table->dropForeign('dispositivos_sensor_id_foreign');
        });
    }
}
