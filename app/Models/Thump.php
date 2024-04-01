<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thumb extends Model
{
    use HasFactory;

    protected $primaryKey = 'thumb_id';

    protected $fillable = [
        'product_id',
        'image',
        'sku',
        'skuId',
        'itemUrl',
        'querystring',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
