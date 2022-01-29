<?php

namespace App\Http\Controllers\Maintenance\Resources;

use Illuminate\Foundation\Http\FormRequest;

class AddQuestionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'question'   => ['required'],
            'answer'     => ['required'],
            'topic'      => ['required'],
            'difficulty' => ['required']
        ];
    }
}
