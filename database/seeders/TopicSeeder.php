<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::query()->insert(
            [
                ['name' => 'art'],                // 1
                ['name' => 'film'],               // 2
                ['name' => 'food & drink'],       // 3
                ['name' => 'general knowledge'],  // 4
                ['name' => 'geography'],          // 5
                ['name' => 'history'],            // 6
                ['name' => 'literature'],         // 7
                ['name' => 'music'],              // 8
                ['name' => 'politics'],           // 9
                ['name' => 'science'],            // 10
                ['name' => 'sport'],              // 11
                ['name' => 'technology'],         // 12
                ['name' => 'travel'],             // 13
                ['name' => 'tv'],                 // 14
            ]
        );
    }
}
