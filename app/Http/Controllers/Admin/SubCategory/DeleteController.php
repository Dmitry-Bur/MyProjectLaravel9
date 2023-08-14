<?php

namespace App\Http\Controllers\Admin\SubCategory;


use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\SubCategory;


class DeleteController extends Controller
{
    public function index(SubCategory $category)
    {


        $products = $category->products;
        if($products){                      //удаляем если есть товары
            foreach ($products as $product)
                $product->delete();
        }

       $category->delete();                 //удаляем полкатегорию

       return response(['message' => 'ok']);


   }
}
