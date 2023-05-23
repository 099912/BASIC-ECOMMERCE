@extends("master")
@section("content")

<div class="custom-product">
   <div class="col-sm-2">
<a href="#">Filter</a>
</div>
<div class="col-sm-4">
      <div class="trending-wrapper">
        <h2>Result Products</h2>
        <div class="">
          @foreach ($collection as $item)
        <div class="new">
          <a href="detail/{{$item['id']}}">
              <img class="trending-img" src="{{$item['gallery']}}">
                 
              <h3>{{$item['name']}}</h3>
              <h3>{{$item['discrip']}}</h3>
</div>
</a>

          </div>
          @endforeach
          </div>
</div>
</div>

@endsection