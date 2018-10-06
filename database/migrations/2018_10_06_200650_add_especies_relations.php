<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEspeciesRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('especies', function (Blueprint $table) {
            $table->foreign('marcas_id')->references('id')->on('marcas');
            $table->foreign('variedad_id')->references('id')->on('variedades');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('especies', function (Blueprint $table) {
            $table->dropForeign('especies_marcas_id_foreign');
            $table->dropForeign('especies_variedad_id_foreign');
        });
    }
}
