<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ManySubcategoriesInCategory>
 */
class ManySubcategoriesInCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subcategories = DB::table('subcategories')->select('id')->get()->toArray();
        $subcategoriesIds = [];
        foreach($subcategories as $subcategory){
            $subcategoriesIds[] = $subcategory->id;
        }
        $categories = DB::table('categories')->select('id')->get()->toArray();
        $categoriesIds = [];
        foreach($categories as $category){
            $categoriesIds[] = $category->id;
        }
        return [
            "id_subcategory"=>$this->faker->randomElement($subcategoriesIds),
            "id_category"=>$this->faker->randomElement($categoriesIds),
        ];
    }
}
