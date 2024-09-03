<?php

namespace Database\Seeders;

use App\Models\Category\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            'Computers',
            'Watches',
            'Headphones',
            'Footwear',
            'Cameras',
            'Shirts',
            'Household',
            'Handbags',
            'Wines',
            'Sandals',
        ];

        foreach ($categories as $category) {
            Category::create([
                Category::NAME_COLUMN_NAME => $category,
                Category::DESCRIPTION_COLUMN_NAME => $category,

            ]);
        }
    }
}
