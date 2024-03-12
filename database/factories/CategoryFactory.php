<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            "name"=>$this->faker->name(),
            "desc"=>$this->faker->paragraph(),
            "photo"=>$this->faker->imageUrl(360, 360, 'catgoriesofinstruments', true),
        ];
    }
}
