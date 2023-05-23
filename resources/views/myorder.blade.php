@extends("master")
@section("content")

<div class="custom-product">
   <div class="col-sm-10">
      <div class="trending-wrapper">
        <h2 class="cart-p">MY Orders</h2>

        @foreach ($tot as $item)
        <div class="row searched-item cart-list-devider">
        <div class="col-sm-3">
          <a href="detail/{{$item->id}}">
              <img class="trending-img" src="{{$item->gallery}}"> 
            </a>
          </div>

          <div class="col-sm-5">
            <div class="">
              <h3>Name:{{$item->name}}</h3>
              <h4>Price:{{$item->price}}</h4>
              <h4>Status:{{$item->status}}</h4>
              <h4>Payment Method:{{$item->payment_method}}</h4>
              <h4>Payment Status:{{$item->payment_status}}</h4>
                </div>
          </div>
          </div>
          
</div> 
         @endforeach
         

</div>  
  </div>
</div>

@endsection 

