<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrototypesRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prototypes', function (Blueprint $table) {
            $table->foreign('ambiente_id')->references('id')->on('ambientes');
            $table->foreign('especie_id')->references('id')->on('especies');
            $table->foreign('sensor_id')->references('id')->on('sensors');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prototypes', function (Blueprint $table) {
            $table->dropForeign('prototypes_ambiente_id_foreign');
            $table->dropForeign('prototypes_especie_id_foreign');
            $table->dropForeign('prototypes_sensor_id_foreign');
            $table->dropForeign('prototypes_user_id_foreign');
        });
    }
}
