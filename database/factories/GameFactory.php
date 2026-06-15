<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends Factory<Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> $this->faker->word(),
            'release_year' => $this->faker->numberBetween(1980, 2023),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'category_id' => $this->faker->numberBetween(1, 5)
        ];
    }
}
