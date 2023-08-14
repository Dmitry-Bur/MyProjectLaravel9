<?php

namespace App\Http\Controllers\Admin\Category;


use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;


class DeleteController extends Controller
{
   public function index(Category $category)
   {
      // dd($category);

       $subCategories = $category->subcategories;

       if($subCategories){

           foreach ($subCategories as $subcategory){
               $products = $subcategory->products;
               $subcategory->delete();
               if ($products){
                   foreach ($products as $product)
                       $product->delete();
               }

           }

       }

       $res = $category->delete();

       return response(['message' => $res]);


   }
}
