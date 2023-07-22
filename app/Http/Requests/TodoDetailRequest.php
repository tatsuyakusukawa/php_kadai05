<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoDetailRequest extends FormRequest
{
    public function authorize()
    {
        return true; // このリクエストの認証は行わないため、trueを返します
    }

    public function rules()
    {
        return [
            'Title' => 'required|string|max:255',
            'Content' => 'required|string',
            'DueDate' => 'nullable|date',
            'CategoryID' => 'required|exists:todo_categories,CategoryID',
        ];
    }
}
