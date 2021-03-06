<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->numberBetween(1000, 10000000),
            'desc' => $this->faker->text,
            'stock' => $this->faker->numberBetween(10, 100),
            'bought' => $this->faker->numberBetween(0, 40),
            'warranty' => $this->faker->numberBetween(0, 24),
            'discount' => $this->faker->numberBetween(0, 20),
            'category_id' => Category::all()->random()->id,
            'brand_id' => Brand::all()->random()->id,
        ];
    }
}
