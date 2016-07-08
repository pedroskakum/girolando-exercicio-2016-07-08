<?php

namespace App\Models\MySQL;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $table = 'Product';
    protected $primaryKey = 'id';
    protected $connection = 'mysql';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'productName',
        'productPrice',
        'productPicture',
        'categoryId',
        'productDescription',
    ];

    public function Category(){
        return $this->belongsTo('app\Models\MySQL\Category');
    }
}
