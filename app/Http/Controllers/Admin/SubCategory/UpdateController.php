<?php

namespace App\Http\Controllers\Admin\SubCategory;


use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubCategory\UpdateRequest;
use App\Models\SubCategory;


class UpdateController extends Controller
{
   public function index(SubCategory $category, UpdateRequest $request)
   {
       $data = $request->validated();
       $category->update($data);

       return response(['message' => 'ok']);


   }
}
