<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    function index()
    {
        $data =Product::all();
        //we are calling product view and passing data to the view using variable name called products
        return view('product',['products'=>$data]);
        
    }
}
