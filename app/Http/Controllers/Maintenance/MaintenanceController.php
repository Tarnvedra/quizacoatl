<?php

namespace App\Http\Controllers\Maintenance;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Maintenance\Resources\UpdatePasswordRequest;
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

    public function importQuestionsView(ViewFactory $view): View
    {
        $user = auth()->user();
        return $view->make('maintenance.import-questions', [
            'user' => $user
        ]);
    }

    public function addTopicView(ViewFactory $view): View
    {
        $user = auth()->user();
        $topics = Topic::query()->get();
        return $view->make('maintenance.add-topic', [
            'user'   => $user,
            'topics' => $topics
        ]);
    }

    public function addQuestionView(ViewFactory $view): View
    {
        $user = auth()->user();
        $topics = Topic::query()->get();
        $difficulty = Difficulty::query()->get();
        return $view->make('maintenance.add-question', [
            'user'       => $user,
            'topics'     => $topics,
            'difficulty' => $difficulty
        ]);
    }


    public function questionsView(ViewFactory $view): View
    {
        $user = auth()->user();
        $questions = Question::query()->where('user_id', '=', $user->id)->get();
        return $view->make('maintenance.questions', [
            'user'      => $user,
            'questions' => $questions
        ]);
    }

    public function topicsView(ViewFactory $view): View
    {
        $user = auth()->user();
        $topics = Topic::query()->get();
        return $view->make('maintenance.topics', [
            'user'   => $user,
            'topics' => $topics
        ]);
    }

    public function userSettingsView(ViewFactory $view): View
    {
        $user = auth()->user();
        return $view->make('maintenance.user-settings', [
            'user' => $user
        ]);
    }

    public function updatePassword(UpdatePasswordRequest $request, ResponseFactory $response, User $user): RedirectResponse
    {
        $user->password = $request->input('password');
        $user->save();

        return $response->redirectTo('/home')->with('success', 'Password successfully updated.');
    }
}
