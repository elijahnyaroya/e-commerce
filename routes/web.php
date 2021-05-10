<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // we import userCotroller that we have create inside app/Http/Controller folder
use App\Http\Controllers\ProductController; // product controller
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

Route::get('/login', function () {
    return view('login');
});

//Loggin out the user and destroying their session
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

//Routing to user profile area
Route::get('/userarea',[UserController::class,'userarea']);

//we use post method then the default url ('/') then we add our controller name and finally we add the 
//the function in our controller. as shown below.
Route::post('/login',[UserController::class,'login']);

//for product page
Route::get('/',[ProductController::class,'index']);

//for detail page
Route::get('detail/{id}',[ProductController::class,'detail']);

//for searching
Route::get('search',[ProductController::class,'search']); 

Route::post('add_to_cart',[ProductController::class,'addToCart']); 

Route::get('cartlist',[ProductController::class,'cartList']); 

Route::get('removecart/{id}',[ProductController::class,'removeCart']); 

Route::get('ordernow',[ProductController::class,'orderNow']); 

Route::post('orderplace',[ProductController::class,'orderPlace']);

Route::get('myorder',[ProductController::class,'myOrder']);