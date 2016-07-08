<?php

namespace App\Models\MySQL;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $table = 'Category';
    protected $primaryKey = 'id';
    protected $connection = 'mysql';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'categoryName',
    ];
}
