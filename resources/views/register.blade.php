@extends('master')
@section("content")
<div class="container custom-login" >
   <div class="row">
       <div class="col-sm-4 col-sm-offset-4">
            <form action="/register" method="POST">
              @csrf
              <div class="form-group">
                    <label for="usnm">Username</label>
                    <input type="text"  name="name" class="form-control"  placeholder="Enter your Full Name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email"  name="email" class="form-control" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Enter your password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
       </div>
   </div>
</div>

@endsection