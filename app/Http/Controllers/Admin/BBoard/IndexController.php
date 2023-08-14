<?php

namespace App\Http\Controllers\Admin\BBoard;


use App\Http\Controllers\Controller;

use App\Http\Resources\BBoardResource;
use App\Models\Bboard;

use Illuminate\Http\Resources\Json\JsonResource;


class IndexController extends Controller
{
   public function index()
   {
       $status = request('status');
       ($status==='all')? $bboard=Bboard::all() : $bboard=Bboard::where('status', $status)->get();

       return BBoardResource::collection($bboard);
   }
}
