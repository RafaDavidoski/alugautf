<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('tipo');
            $table->string('telefone');
            $table->string('endereco');
            $table->double('valor');
            $table->string('descricao');
            $table->string('ngaragem');
            $table->string('nquartos');
            $table->string('nbanheiros');
            $table->string('foto');
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
        Schema::dropIfExists('imovels');
    }
}
