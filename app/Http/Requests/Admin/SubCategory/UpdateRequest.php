<?php

namespace App\Http\Requests\Admin\SubCategory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{


    public function rules()
    {
        return [
            'name' => 'required|string',
        ];
    }
}
