<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Brand::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Subcategory::factory(10)->create();
        \App\Models\Product::factory(10)->create();
        \App\Models\ManyProductsInSubcategory::factory(10)->create();
        \App\Models\ManySubcategoriesInCategory::factory(10)->create();
    }
}
