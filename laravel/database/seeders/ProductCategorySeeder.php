<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data for products and categories
        $products = range(1, 100); // Assuming you have 100 products
        $categories = range(1, 10); // Assuming you have 10 categories

        // Generate combinations of product_id and category_id
        $productCategories = [];
        foreach ($products as $product) {
            foreach ($categories as $category) {
                $productCategories[] = ['product_id' => $product, 'category_id' => $category];
            }
        }

        // Inserting data into the product_category table
        DB::table('product_category')->insert($productCategories);
    }
}
