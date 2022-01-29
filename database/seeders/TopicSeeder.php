<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                ['name' => 'art', 'class' => 'btn-dark'],                 // 1
                ['name' => 'film', 'class' => 'btn-light'],               // 2
                ['name' => 'food & drink', 'class' => 'btn-success'],     // 3
                ['name' => 'general knowledge', 'class' => 'btn-info'],   // 4
                ['name' => 'geography', 'class' => 'btn-warning'],        // 5
                ['name' => 'history', 'class' => 'btn-secondary'],        // 6
                ['name' => 'literature', 'class' => 'btn-warning'],       // 7
                ['name' => 'music', 'class' => 'btn-light'],              // 8
                ['name' => 'politics', 'class' => 'btn-success'],         // 9
                ['name' => 'science', 'class' => 'btn-danger'],           // 10
                ['name' => 'sport', 'class' => 'btn-info'],               // 11
                ['name' => 'technology', 'class' => 'btn-dark'],          // 12
                ['name' => 'travel', 'class' => 'btn-secondary'],         // 13
                ['name' => 'tv', 'class' => 'btn-success'],               // 14
            ]
        );
    }
}
