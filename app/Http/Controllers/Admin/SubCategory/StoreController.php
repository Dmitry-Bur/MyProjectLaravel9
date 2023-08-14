<?php

namespace App\Http\Controllers\Admin\SubCategory;


use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubCategory\StoreRequest;
use App\Models\SubCategory;


class StoreController extends Controller
{
   public function index(StoreRequest $request)
   {
      // dd(1222);
       $data = $request->validated();
       SubCategory::create($data);

       return response(['message' => 'ok']);
   }
}
