<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    public $timestamps = true;

    protected $fillable = [
        'product_name',
        'product_price',
        'product_qty',
        'category_id',
        'brand_id',
        'product_description',
        'product_status',
        'product_images_1',
        'product_images_2',
        'product_images_3',
    ];
}
