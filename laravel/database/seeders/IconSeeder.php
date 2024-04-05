<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $icons = [
            ['domClass' => 'icon-class1', 'type' => 'type1', 'group' => 'group1', 'showType' => 'showType1'],
            ['domClass' => 'icon-class2', 'type' => 'type2', 'group' => 'group2', 'showType' => 'showType2'],
            // Add more sample data as needed
        ];

        // Inserting data into the icons table
        foreach ($icons as $icon) {
            DB::table('icons')->insert([
                'product_id' => 1, // Assuming product_id 1 for illustration
                'domClass' => $icon['domClass'],
                'type' => $icon['type'],
                'group' => $icon['group'],
                'showType' => $icon['showType'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
