<?php

namespace App\Http\Controllers\Maintenance\Resources;

use Illuminate\Foundation\Http\FormRequest;

class AddTopicRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'topic'      => ['required'], //'exists:topics,name'],
            'class'      => ['required']
        ];
    }
}
