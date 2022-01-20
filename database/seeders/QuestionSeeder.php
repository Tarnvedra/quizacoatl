<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
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
        $json = File::get(__DIR__ . '/data/questions.json');
        $questions = json_decode($json);
        foreach ($questions as $question) {
            Question::query()->updateOrCreate(
                [ "question" => $question->question,],
                [ 'topic_id' => $question->topic_id, "difficulty_id" => $question->difficulty_id, "answer" => encrypt($question->answer)]
            );
        }
    }

}
