<?php

namespace App\Http\Controllers\Admin\SubCategory;


use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;


class SubCategoryController extends Controller
{
   public function index()
   {
       $categories = Category::all();

       foreach ($categories as $ket=>$cat){
           $cats[$ket] = $cat::find($cat->id)->subcategories;
       }

       return new CategoryResource($cats);
   }
}
