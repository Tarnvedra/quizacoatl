<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{

    public function index(ViewFactory $view): View
    {
        $user = auth()->user();
        $question = '';
        $answer = '';
        return $view->make('dashboard' ,
            [ 'user' => $user,
            'question' => $question,
            'answer' => $answer,
            ]
        );
    }
}
