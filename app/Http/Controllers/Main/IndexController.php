<?php

namespace App\Http\Controllers\Main;


use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
   public function index()
   {
       //$data = DB::select('select * from products');
       $data = DB::table('products')->get('*');
       //dd($data);

      // $d = SubCategory::where('id','1')->first();
      // $d =$d->products;

       //dd($d);
       return view('main.index',['data'=> $data]);
   }
}
