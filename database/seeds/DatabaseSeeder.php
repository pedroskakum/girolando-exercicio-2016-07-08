<?php

use App\Models\MySQL\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('/var/www/imagens');
        exec('rm -rf /var/www/imagens/*');
        exec('chmod 777 -R /var/www/imagens/');

        factory('App\Models\SQLite\Categoria', 15)->create()->each(function($Categoria)
        {
            factory('App\Models\MySQL\Category', 1)->create(['id' => $Categoria->idCategoria]);

            factory('App\Models\SQLite\Produto', 30)->create(['idCategoria' => $Categoria->idCategoria])->each(function($Produto)
            {
                factory('App\Models\MySQL\Product', 1)->create(['id' => $Produto->idProduto, 'categoryId' => $Produto->idCategoria])->each(function($Product)
                {
                    $Product->update(['productPicture' => Factory::create()->image('/var/www/imagens')]);
                });

            });
        });
    }
}
