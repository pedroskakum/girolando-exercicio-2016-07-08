<?php

namespace App\Models\SQLite;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;
    protected $table = 'Categoria';
    protected $primaryKey = 'idCategoria';
    protected $connection = 'sqlite';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idCategoria',
        'nomeCategoria',
    ];
}
