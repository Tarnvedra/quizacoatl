<?php

namespace App\Http\Controllers\Maintenance;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Maintenance\Resources\Topic as TopicResource;
use App\Models\Topic;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;


class QuizController extends Controller
{
    public function scores(ViewFactory $view): View
  {
      return $view->make('scores', ['user' => Auth::user()]);
  }
}
