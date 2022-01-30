<?php

namespace App\Http\Controllers\Maintenance;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Maintenance\Resources\Topic as TopicResource;
use App\Models\Topic;

class QuizController extends Controller
{
  public function getTopics()
  {
      $topics = Topic::query()->get();
      return TopicResource::collection($topics);
  }
}
