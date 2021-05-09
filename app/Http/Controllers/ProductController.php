<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;  // we import session to get detail for the user who is logged in
use Illuminate\Support\Facades\DB;
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

    // function to get user cart item details

    static function cartItem()
    {
       $userID = Session::get('user')['id'];
       return Cart::where('user_id',$userID)->count();
    }

    function cartList()
    {
      $userId = Session::get('user')['id'];
      $products = DB::table('cart')
      ->join('products','cart.product_id','=','products.id')
      ->where('cart.user_id',$userId)
      ->select('products.*','cart.id as cartId')
      ->get();

      return view('cartlist',['products'=>$products]);
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow()
    {
        $userId = Session::get('user')['id'];
        $total= $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');
        return view('ordernow',['total'=>$total]);
    }
}
