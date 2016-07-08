<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('Product', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('productName');
            $table->double('procuctPrice');
            $table->string('productPicture');
            $table->text('productDescription');
            $table->bigInteger('categoryId');
            $table->foreign('categoryId')->references('id')->on('Category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql')->drop('Product');
    }
}
