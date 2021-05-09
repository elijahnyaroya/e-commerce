@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10" >
        <div class="trending-wrapper">
        <h3>Result for product</h3>
        <a href="ordernow" class="btn btn-success">Order Now</a>
            @foreach($products as $items) 
            <div class="row searched-item cart-list-divider">
               <div class="col-sm-3">
                <a href="detail/{{$items->id}}">
                        <img src="{{$items->gallery}}" class="trending-img">
                        
                    </a>
               </div>
               <div class="col-sm-6">
                        <div class="">
                        <h2>{{$items->name}}</h2>
                        <h5>{{$items->description}}</h5>
                        </div>
               </div>
               <div class="col-sm-3">
                <a href="/removecart/{{$items->cartId}}" class="btn btn-warning" >Remove from Cart</a>
               </div>
               
            </div>
            @endforeach
        </div>ordernow
        <a href="" class="btn btn-success">Order Now</a>
    </div>
  
</div>

@endsection
