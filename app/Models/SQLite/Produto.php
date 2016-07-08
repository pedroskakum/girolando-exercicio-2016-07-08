<?php

namespace App\Models\SQLite;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = false;
    protected $table = 'Produto';
    protected $primaryKey = 'idProduto';
    protected $connection = 'sqlite';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idProduto',
        'idCategoria',
        'nomeProduto',
        'precoProduto',
        'descricaoProduto',
    ];

    public function Categoria(){
        return $this->belongsTo('app\Models\SQLite\Categoria');
    }
}
