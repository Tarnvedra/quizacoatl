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
                ['name' => 'art' , 'class' => 'btn-dark btn-lg'],                // 1
                ['name' => 'film', 'class' => 'btn-light btn-lg'],               // 2
                ['name' => 'food & drink', 'class' => 'btn-success btn-lg'],       // 3
                ['name' => 'general knowledge', 'class' => 'btn-info btn-lg'],  // 4
                ['name' => 'geography', 'class' => 'btn-warning btn-lg'],          // 5
                ['name' => 'history', 'class' => 'btn-secondary btn-lg'],            // 6
                ['name' => 'literature', 'class' => 'btn-warning btn-lg'],         // 7
                ['name' => 'music', 'class' => 'btn-light btn-lg'],              // 8
                ['name' => 'politics', 'class' => 'btn-success btn-lg'],           // 9
                ['name' => 'science', 'class' => 'btn-danger btn-lg'],            // 10
                ['name' => 'sport', 'class' => 'btn-info btn-lg'],              // 11
                ['name' => 'technology', 'class' => 'btn-dark btn-lg'],         // 12
                ['name' => 'travel', 'class' => 'secondary btn-lg'],             // 13
                ['name' => 'tv', 'class' => 'btn-success btn-lg'],                 // 14
            ]
        );
    }
}
