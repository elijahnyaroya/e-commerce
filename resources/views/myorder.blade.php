@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10" >
        <div class="trending-wrapper">
        <h3>My product orders</h3>
            @foreach($orders as $items) 
            <div class="row searched-item cart-list-divider">
               <div class="col-sm-3">
                <a href="detail/{{$items->id}}">
                        <img src="{{$items->gallery}}" class="trending-img">
                        
                    </a>
               </div>
               <div class="col-sm-6">
                        <div class="">
                        <h2>Name : {{$items->name}}</h2>
                        <h5>Delivery Status : {{$items->status}}</h5>
                        <h5>Address  : {{$items->address}}</h5>
                        <h5>Payment Status : {{$items->payment_status}}</h5>
                        <h5>Delivery Method : {{$items->payment_method}}</h5>
                        </div>
               </div>
              
               
            </div>
            @endforeach
        </div>
    </div>
  
</div>

@endsection
