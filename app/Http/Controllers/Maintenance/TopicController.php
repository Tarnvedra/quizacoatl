<?php

namespace App\Http\Controllers\Maintenance;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Maintenance\Resources\AddTopicRequest;
use App\Models\Topic;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\RedirectResponse;

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
}
