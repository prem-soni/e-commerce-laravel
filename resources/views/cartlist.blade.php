@extends('master')
@section('content')
  <div class="custom-product">
     <div class="col-sm-8">
     <div class="trending-wrapper">
    <h4>Cart Products</h4>
      <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
    @foreach($products as $item)
    <div class="row searched-item cart-list-divider">
      <div class="col-sm-3">
      
      <a href="detail/{{$item->id}}">
      <img class="trending-image" src="{{$item->gallery}}">
      </a>
      </div>
      <div class="col-sm-6">     
      <div class="">
        <h2>{{$item->name}}</h2>
        <h5>{{$item->discription}}</h5>        
      </div>
      </a>
      </div> 
       <div class="col-sm-3">
        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a>
      </div>
    </div>
    @endforeach
   </div>
   <a class="btn btn-success order-btn" href="ordernow">Order Now</a>
     </div>
  </div>
@endsection