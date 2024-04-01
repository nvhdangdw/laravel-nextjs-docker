<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nid',
        'itemId',
        'icons',
        'image',
        'isSmartImage',
        'utLogMap',
        'originalPriceShow',
        'priceShow',
        'ratingScore',
        'review',
        'location',
        'description',
        'thumbs',
        'sellerName',
        'sellerId',
        'brandName',
        'brandId',
        'cheapest_sku',
        'skuId',
        'sku',
        'categories',
        'showFeedBack',
        'price',
        'restrictedAge',
        'inStock',
        'clickTrace',
    ];

    protected $casts = [
        'icons' => 'json',
        'utLogMap' => 'json',
        'description' => 'json',
        'thumbs' => 'json',
        'categories' => 'json',
        'inStock' => 'boolean',
        'showFeedBack' => 'boolean',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category', 'product_id', 'category_id');
    }
}
