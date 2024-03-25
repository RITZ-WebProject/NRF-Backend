<?php

namespace Database\Factories;

use App\Http\Controllers\ProductController;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1,10),
            'product_name' => $this->faker->name(),
            'description' => $this->faker->description(),
            'photo' => $this->faker->image(),
        ];
    }
}
