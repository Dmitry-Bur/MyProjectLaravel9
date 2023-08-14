<?php

namespace App\Http\Controllers\Admin\Category;


use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;


class UpdateController extends Controller
{
   public function index(Category $category, UpdateRequest $request)
   {
       $data = $request->validated();

       $res = $category->update($data);





       return response(['message' => $data]);


   }
}
