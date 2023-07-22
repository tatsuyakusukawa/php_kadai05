<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true; // このリクエストの認証は行わないため、trueを返します
    }

    public function rules()
    {
        return [
            'CategoryName' => 'required|string|max:255',
        ];
    }
}
