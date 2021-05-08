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

//we use post method then the default url ('/') then we add our controller name and finally we add the 
//the function in our controller. as shown below.
Route::post('/login',[UserController::class,'login']);

Route::get('/',[ProductController::class,'index']);