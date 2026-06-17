<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory(5)->create();
        foreach (Category::all() as $category) {
            Game::factory(10)->create(['category_id' => $category->id]);
        }
        foreach (Game::all() as $game) {
            Review::factory(5)->create(['game_id' => $game->id]);
        }
    }
}
