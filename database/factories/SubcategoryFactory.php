<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subcategory>
 */
class SubcategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = DB::table('categories')->select('id')->get()->toArray();
        $categoriesIds = [];
        foreach($categories as $category){
            $categoriesIds[] = $category->id;
        }
        return [
            "name"=>$this->faker->name(),
            "desc"=>$this->faker->paragraph(),
            "photo"=>$this->faker->imageUrl(360, 360, 'subcatgoriesofinstruments', true),
            "id_category"=>$this->faker->randomElement($categoriesIds),
        ];
    }
}
