<?php

namespace Database\Seeders;

use App\Models\Difficulty;
use Illuminate\Database\Seeder;

class DifficultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Difficulty::query()->insert(
            [   ['name' => 'very-easy', 'points_value' => 1],
                ['name' => 'easy', 'points_value' => 2],
                ['name' => 'medium', 'points_value' => 3],
                ['name' => 'hard', 'points_value' => 4],
                ['name' => 'very-hard', 'points_value' => 5],
            ]);
    }
}
