<?php

use App\Http\Controllers\Admin\Category\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

 Route:: middleware('auth:sanctum')->  get('/get',  [\App\Http\Controllers\TestController::class,'index']);


Route::group(['namespace'=>'\App\Http\Controllers\Admin\Category','prefix'=>'admins/categories'], function (){
    Route::get('/', 'IndexController@index');
    Route::post('/', 'StoreController@index');
    Route::delete('/{category}', 'DeleteController@index');
    Route::patch('/{category}', 'UpdateController@index');

});


Route::group(['namespace'=>'\App\Http\Controllers\Admin\SubCategory','prefix'=>'admins/subcategories'], function (){
    Route::get('/', 'SubCategoryController@index');
    Route::post('/', 'StoreController@index');
    Route::delete('/{category}', 'DeleteController@index');
    Route::patch('/{category}', 'UpdateController@index');
});

Route::group(['namespace'=>'\App\Http\Controllers\Admin\BBoard','prefix'=>'admins/bboard'], function (){
    Route::get('/{status}', 'IndexController@index');
   // Route::get('/', 'ShowController@index');
   // Route::post('/', 'StoreController@index');
    //Route::delete('/{category}', 'DeleteController@index');
  //  Route::patch('/{category}', 'UpdateController@index');
});

