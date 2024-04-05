<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThumpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        for ($i = 1; $i <= 100; $i++) {
            DB::table('thumbs')->insert([
                'image' => 'image_' . $i . '.jpg',
                'sku' => 'SKU_' . $i,
                'skuId' => 'SKU_ID_' . $i,
                'itemUrl' => 'https://example.com/item/' . $i,
                'querystring' => 'param=value_' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
