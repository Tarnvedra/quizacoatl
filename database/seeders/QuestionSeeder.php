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
            $checkQuestion = Question::query()->where('question', 'like', '%'.$question->question.'%')
                                              ->where('topic_id', '=', $question->topic_id)
                                              ->value('question');


            if($checkQuestion !== $question->question) {

                Question::query()->create(
                    [   'question' => $question->question,
                        'topic_id' => $question->topic_id,
                        'difficulty_id' => $question->difficulty_id,
                        "answer" => encrypt($question->answer)
                    ]
                );

               // var_dump($checkQuestion);
               // var_dump($question->question);
            }
        }
    }

}
