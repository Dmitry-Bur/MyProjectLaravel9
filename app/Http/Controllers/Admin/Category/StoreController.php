<?php

namespace App\Http\Controllers\Admin\Category;


use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;


class StoreController extends Controller
{
   public function index(StoreRequest $request)
   {
       $category = $request->validated();
       $res =  Category::firstOrCreate($category);
       $res = $res->wasRecentlyCreated;

       return response(['message' => $res]);


   }
}
