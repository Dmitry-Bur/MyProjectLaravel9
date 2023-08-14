<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\IndexController as IndexAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace'=>'\App\Http\Controllers\Admin'], function (){
    Route::get('/admins{page}', 'IndexController@index')->where('page', '.*');
});

Route::group(['namespace'=>'\App\Http\Controllers\Main'], function (){
    Route::get('/', 'IndexController@index');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
