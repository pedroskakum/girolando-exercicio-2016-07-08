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
            $table->primary('id');
            $table->string('productName');
            $table->double('procuctPrice');
            $table->string('productPicture');

            $table->unsignedBigInteger('categoryId');
            $table->foreign('categoryId')->references('id')->on('Category');


            $table->text('productDescription');
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
