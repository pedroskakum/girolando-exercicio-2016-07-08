<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Produto', function (Blueprint $table) {
            $table->bigIncrements('idProduto');
            $table->unsignedBigInteger('idCategoria');
            $table->foreign('idCategoria')->references('idCategoria')->on('Categoria');
            $table->string('nomeProduto');
            $table->double('precoProduto');
            $table->text('descricaoProduto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Produto');
    }
}
