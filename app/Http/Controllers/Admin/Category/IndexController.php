<?php

namespace App\Http\Controllers\Admin\Category;


use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;


class IndexController extends Controller
{
   public function index()
   {
       $categories = Category::all();




       return new CategoryResource($categories);
   }
}
