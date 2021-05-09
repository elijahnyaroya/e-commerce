@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-4" >
      <a href="#">Filter</a>
    </div>
    <div class="col-sm-4" >
        <div class="trending-wrapper">
        <h3>Result for product</h3>
            @foreach($products as $items) 
            <div class="searched-item">
            <a href="detail/{{$items['id']}}">
                    <img src="{{$items['gallery']}}" class="trending-img">
                    <div class="">
                    <h2>{{$items['name']}}</h2>
                    <h5>{{$items['description']}}</h5>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection