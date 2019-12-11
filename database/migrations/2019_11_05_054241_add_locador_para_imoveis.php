<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLocadorParaImoveis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('imovels', function (Blueprint $table) {
            $table->unsignedBigInteger('locador_id');
            $table->foreign('locador_id')->references('id')->on('locadors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('imovels', function (Blueprint $table) {
            $table->dropForeign(['locador_id']);
            $table->dropColumn(['locador_id']);
        });
    }
}
