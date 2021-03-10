<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array {
        return [
            'rating' => $this->faker->numberBetween(0, 5),
            'comment' => $this->faker->sentence,
            'product_id' => Product::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
