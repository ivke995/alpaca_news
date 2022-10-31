<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules() :array
    {
        return [
            'news_link' => 'required|unique:news',
            'image_url' => 'nullable',
            'text' => 'required|unique:news|string'
        ];
    }
}
