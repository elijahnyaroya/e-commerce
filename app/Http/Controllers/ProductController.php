<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
class ProductController extends Controller
{
    //
    function index()
    {
        $data =Product::all();
        //we are calling product view and passing data to the view using variable name called products
        return view('product',['products'=>$data]);
        
    }

    function detail($id)
    {
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }
      
    function search(Request $req)
    { 
        $data = Product::
        where('name','like','%'.$req->input('query').'%')
        ->get(); 

        return view('search',['products'=>$data]);
    }

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
          $cart = new Cart;
          $cart->user_id=$req->session()->get('user')['id']; //getting user id from session
          $cart->product_id=$req->product_id; //get product id submited from the product page
          $cart->save();
          return redirect('/');
        }else{
            return redirect('/login');
        }
     
    }
}
