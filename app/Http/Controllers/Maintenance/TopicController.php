<?php

namespace App\Http\Controllers\Maintenance;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Maintenance\Resources\AddTopicRequest;
use App\Http\Controllers\Maintenance\Resources\Topic as TopicResource;
use App\Models\Topic;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
   public function saveTopic(AddTopicRequest $request, ResponseFactory $response): RedirectResponse
   {
       $topic = new Topic();

       $topic->name = strtolower($request->get('topic'));
       $topic->class = $request->get('class');

       $checkTopic = Topic::query()->where('name', '=', $topic->name)->value('name');

       if($checkTopic === $topic->name) {
           return $response->redirectTo('/maintenance/add-topic')->with('error', 'Topic Already Exists. - '.$checkTopic);
       }

       $topic->save();

       return $response->redirectTo('/maintenance/topics')->with('success', 'Topic successfully added.');

   }

    public function getTopics()
    {
        $topics = Topic::query()->get();
        return TopicResource::collection($topics);
    }

    public function topicsView(ViewFactory $view): View
    {
        $topics = Topic::query()->get();
        return $view->make('maintenance.topics', [
            'user'   => Auth::user(),
            'topics' => $topics
        ]);
    }

    public function addTopicView(ViewFactory $view): View
    {
        $topics = Topic::query()->get();
        return $view->make('maintenance.add-topic', [
            'user'   => Auth::user(),
            'topics' => $topics
        ]);
    }
}
