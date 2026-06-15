<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
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
    // make the return unique and random, so that the categories are not repeated in the database.    
    return [
            'name' => fake()->unique()->randomElement([
            'Action',
            'Adventure',
            'RPG',
            'Strategy',
            'Simulation',
            'Puzzle',
            'Sports',
            'Racing',
        ])
        ];
    }
}
