<?php

namespace App\Http\Controllers\Maintenance;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Maintenance\Resources\AddQuestionRequest;
use App\Models\Question;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\RedirectResponse;


class QuestionController extends Controller
{
    public function saveQuestion(AddQuestionRequest $request, ResponseFactory $response): RedirectResponse
    {
        $topicID = $request->get('topic');
        $question = $request->get('question');
        $answer = $request->get('answer');

        $checkQuestion = Question::query()->where('question', 'like', '%'.$question.'%')
                                          ->where('topic_id', '=', $topicID)->value('question');

        if($checkQuestion === $question) {
            return $response->redirectTo('/maintenance/add-question')->with('error', 'A Similar Question Already Exists. - '.$checkQuestion);
        }

        $saveQuestion = new Question();

        $saveQuestion->topic_id = $topicID;
        $saveQuestion->difficulty_id = $request->get('difficulty');
        $saveQuestion->question = $question;
        $saveQuestion->answer = encrypt($request->get('answer'));
        $saveQuestion->save();

        return $response->redirectTo('/maintenance/questions')->with('success', 'Question successfully added.');
    }
}