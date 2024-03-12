<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brands = DB::table('brands')->select('id')->get()->toArray();
        $brandsIds = [];
        foreach($brands as $brand){
            $brandsIds[] = $brand->id;
        }
        $categories = DB::table('categories')->select('id')->get()->toArray();
        $categoriesIds = [];
        foreach($categories as $category){
            $categoriesIds[] = $category->id;
        }
        
        return [
            "name"=>$this->faker->name(),
            "articule"=>$this->faker->regexify('[A-Z]{1}[0-4]{6}'),
            "desc"=>$this->faker->paragraph(),
            "id_brand"=>$this->faker->randomElement($brandsIds), // randomElement($brandsIds)
            "stock"=>$this->faker->randomNumber(3, false),
            "specifications"=>$this->faker->paragraph(),
            "id_category"=>$this->faker->randomElement($categoriesIds),
            "price"=>$this->faker->randomNumber(6, false),
            "photo"=>$this->faker->imageUrl(360, 360, 'instruments', true),
        ];
    }
}
