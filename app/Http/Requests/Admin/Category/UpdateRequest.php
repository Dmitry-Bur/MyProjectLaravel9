<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{


    public function rules()
    {
        return [
            'name' => 'required|string|min:6|max:40',
        ];
    }
}
