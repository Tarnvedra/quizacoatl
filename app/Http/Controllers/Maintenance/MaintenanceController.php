<?php

namespace App\Http\Controllers\Maintenance;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Maintenance\Resources\UpdatePasswordRequest;
use Carbon\Carbon;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\RedirectResponse;
use App\Models\Difficulty;
use App\Models\Question;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class MaintenanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function importQuestionsView(ViewFactory $view): View
    {
        return $view->make('maintenance.import-questions', [
            'user' => Auth::user()
        ]);
    }



    public function addQuestionView(ViewFactory $view): View
    {
        $topics = Topic::query()->get();
        $difficulty = Difficulty::query()->get();
        return $view->make('maintenance.add-question', [
            'user'       => Auth::user(),
            'topics'     => $topics,
            'difficulty' => $difficulty
        ]);
    }


    public function questionsView(ViewFactory $view): View
    {
        $questions = Question::query()->where('user_id', '=', Auth::id())->get();
        return $view->make('maintenance.your-questions', [
            'user' => Auth::user(),
            'questions' => $questions
        ]);
    }

        public function allQuestionsView(ViewFactory $view): View
    {
        $questions = Question::query()->where('created_at', '<=', Carbon::now()->subDays(40))
                                      ->orWhere('user_id', '=', Auth::id())->get();
        return $view->make('maintenance.all-questions', [
            'user'      => Auth::user(),
            'questions' => $questions
        ]);
    }

    public function questionView(ViewFactory $view, Question $question): View
    {
        if(Auth::id() !== $question->user_id)
        {
            abort(403);
        };

        return $view->make('maintenance.question', [
            'user'      => Auth::user(),
            'question' => $question
        ]);
    }
}
