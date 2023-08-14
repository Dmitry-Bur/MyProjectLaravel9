<?php

namespace App\Http\Requests\Admin\SubCategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{


    public function rules()
    {
        return [
            'name' => 'required|string',
            'category_id' => 'required|integer'
        ];
    }
}
