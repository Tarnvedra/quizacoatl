<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Topic;
use Carbon\Carbon;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{

    public function quizBoard(ViewFactory $view): View
    {
        $topics = Topic::query()->get();
        $user = auth()->user();
        $question = '';
        $answer = '';
        return $view->make('quiz-board', [
                'user' => $user,
                'question' => $question,
                'answer' => $answer,
                'topics' => $topics,
            ]
        );
    }

    public function index(ViewFactory $view): View
    {
        $date = Carbon::now()->subDays(7);
        $user = auth()->user();
        $totalTopics = Topic::query()->count();
        $totalQuestions = Question::query()->count();
        $newTopics = Topic::query()->where('id', '>' ,'14')->count();
        $newQuestions = Question::query()->where('created_at', '>=', $date)->count();
        $questions = Question::query()->where('created_at', '>=', $date)
                                      ->where('user_id', '=', 1)
                                      ->latest()->limit(15)->get();

        if(!$questions || $questions->count() < 4) {
            $questions = Question::query()->where('created_at', '<=', Carbon::yesterday())
                                          ->where('user_id', '=', 1)
                                          ->latest()->limit(15)->get();
        }
        return $view->make('dashboard', [
            'questions' => $questions,
            'totalTopics' => $totalTopics,
            'totalQuestions' => $totalQuestions,
            'newTopics' => $newTopics,
            'newQuestions' => $newQuestions,
            'user'  => $user,
        ]);
    }
}
