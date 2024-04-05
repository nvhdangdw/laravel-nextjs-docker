<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;

    protected $primaryKey = 'icon_id';

    protected $fillable = [
        'product_id',
        'domClass',
        'type',
        'group',
        'showType',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
