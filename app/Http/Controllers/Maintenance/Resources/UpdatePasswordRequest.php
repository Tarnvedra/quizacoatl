<?php

namespace App\Http\Controllers\Maintenance\Resources;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'password'              => ['required'],
            'confirm-password'      => ['required']
        ];
    }
}
