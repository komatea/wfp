<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/menu','menu');

Route::get('/menu/{category}/{product}',function($category='pudding',$product='pudding-fla'){
    return view('productdetail',['category'=>$category,'product'=>$product]);
});

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);