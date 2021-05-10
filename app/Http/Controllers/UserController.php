<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash; // for creating hash in this file we will check hash
use Illuminate\Http\Request;
use App\Models\User; //importing model that will communicate with database
use Session;


class UserController extends Controller
{
    //
    function login(Request $req){
        $user =  User::where(['email'=>$req->email])->first();
       if(!$user || !Hash::check($req->password,$user->password))
       {
          return "Username or password is invalid";
       }else
       {
           //setting session data before redirecting the user after successfull login
           $req->session()->put('user',$user);
           return redirect('/');
       }
    }

    function userarea(){
        $userData = Session::has('user');
        if($userData)
        {
          return view('/userarea',['userdata'=>Session::get('user')]);
        }else
        {
            return  redirect('/');
        }
    }

    function register(Request $req){
        //return $req->input();

        $user = new User();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();

        return redirect('/login');
    }
}
