<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i <= 100; $i++) {
            DB::table('products')->insert([
                'name' => 'Product ' . $i,
                'nid' => 'NID' . $i,
                'itemId' => 'ITEM00' . $i,
                'icons' => json_encode(['icon' . $i . '_1', 'icon' . $i . '_2']),
                'image' => 'product' . $i . '.jpg',
                'isSmartImage' => ($i % 2 == 0) ? true : false,
                'utLogMap' => json_encode(['key' . $i . '_1' => 'value' . $i . '_1', 'key' . $i . '_2' => 'value' . $i . '_2']),
                'originalPriceShow' => null,
                'priceShow' => '$' . ($i * 10),
                'ratingScore' => 4.0 + ($i * 0.1),
                'review' => 50 + $i,
                'location' => 'Location ' . $i,
                'description' => json_encode(['description' => 'Description for Product ' . $i]),
                'thumbs' => json_encode(['thumb' . $i . '_1.jpg', 'thumb' . $i . '_2.jpg']),
                'sellerName' => 'Seller ' . $i,
                'sellerId' => 'SELLER00' . $i,
                'brandName' => 'Brand ' . $i,
                'brandId' => 'BRAND00' . $i,
                'cheapest_sku' => 'SKU00' . $i,
                'skuId' => 'SKU00' . $i,
                'sku' => 'SKU00' . $i,
                'categories' => json_encode(['category' . $i . '_1', 'category' . $i . '_2']),
                'showFeedBack' => ($i % 2 == 0) ? true : false,
                'price' => $i * 10,
                'restrictedAge' => 18,
                'inStock' => ($i % 2 == 0) ? true : false,
                'clickTrace' => 'Click trace ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
