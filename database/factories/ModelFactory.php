<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\SQLite\Produto::class, function (Faker\Generator $faker) {

    $SQLiteCategoria = factory(App\Models\SQLite\Categoria::class)->create();

    return [
        'idCategoria'       => $SQLiteCategoria->idCategoria,
        'nomeProduto'       => $faker->name,
        'precoProduto'      => $faker->randomFloat(100, 10, 500),
        'descricaoProduto'  => $faker->paragraph,
    ];
});

$factory->define(App\Models\SQLite\Categoria::class, function (Faker\Generator $faker) {
    return [
        'nomeCategoria' => $faker->name,
    ];
});

$factory->define(App\Models\MySQL\Product::class, function (Faker\Generator $faker) {

    $SQLiteProduto = factory(App\Models\SQLite\Produto::class)->create();
    $MySQLCategoty = factory(App\Models\MySQL\Category::class)->create(['id' => $SQLiteProduto->idCategoria]);

    return [
        'id'                    => $SQLiteProduto->idProduto,
        'productName'           => $SQLiteProduto->nomeProduto,
        'procuctPrice'          => $SQLiteProduto->precoProduto,
        'productPicture'        => $faker->imageUrl(),
        'productDescription'    => $SQLiteProduto->descricaoProduto,
        'categoryId'            => $MySQLCategoty->CategoryName,
    ];
});

$factory->define(App\Models\MySQL\Category::class, function (Faker\Generator $faker) {

    $SQLiteCategoria = factory(App\Models\SQLite\Categoria::class)->create();

    return [
        'id'            => $SQLiteCategoria->idCategoria,
        'CategoryName'  => $SQLiteCategoria->nomeCategoria,
    ];
});