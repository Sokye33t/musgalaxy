<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ManyProductsInSubcategory>
 */
class ManyProductsInSubcategoryFactory extends Factory
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
        $products = DB::table('products')->select('id')->get()->toArray();
        $productsIds = [];
        foreach($products as $product){
            $productsIds[] = $product->id;
        }
        return [
            "id_subcategory"=>$this->faker->randomElement($subcategoriesIds),
            "id_products"=>$this->faker->randomElement($productsIds),
        ];
    }
}
