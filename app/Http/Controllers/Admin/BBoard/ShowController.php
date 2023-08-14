<?php

namespace App\Http\Controllers\Admin\BBoard;


use App\Http\Controllers\Controller;

use App\Http\Resources\BBoardShowResource;
use App\Models\Bboard;

use Illuminate\Http\Resources\Json\JsonResource;


class ShowController extends Controller
{
   public function index(Bboard $ads)
   {

      // $categories = Bboard::all();

       return new BBoardShowResource($ads);
   }
}
