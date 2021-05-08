@extends('master')
@section("content")
<div class="container custom-login" >
   <div class="row">
       <div class="col-sm-4 col-sm-offset-4">
            <form >
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="password">Email address</label>
                    <input type="password" class="form-control" id="exampleInputPassword" placeholder="Enter your password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
       </div>
   </div>
</div>

@endsection