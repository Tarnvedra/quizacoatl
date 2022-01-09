<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->delete();
        $json = File::get(__DIR__ . '/data/questions.json');
        $questions = json_decode($json);
        foreach ($questions as $question)
            Question::query()->create(array(
                'topic_id' => $question->topic_id,
                "difficulty_id" => $question->difficulty_id,
                "question" => $question->question,
                "answer" => $question->answer
            ));
    }

}
