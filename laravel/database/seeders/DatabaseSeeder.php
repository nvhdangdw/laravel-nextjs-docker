<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {        
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(IconSeeder::class);
        $this->call(ThumpSeeder::class);
        $this->call(ProductCategorySeeder::class);
    }
}
