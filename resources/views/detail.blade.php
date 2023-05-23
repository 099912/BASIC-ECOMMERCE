@extends("master")
@section("content")

<div class="container">
<div class="row">
<div class="col-sm-6">

<img class="detail-pic" src="{{$item['gallery']}}" alt="">

</div>

<div class="col-sm-6">

<a href="/product"> Back </a>
<h3>Name:{{$item['name']}}</h3>
<h3>Price:{{ $item['price']}}</h3>
<h3>Category:{{ $item['category']}}</h3>
<h3>Discription:{{$item['discrip']}}</h3>
<br><br>

<form action="/addCart" method="POST">
<input type="hidden" name="product_id" value="{{$item['id']}}">
@csrf
<button class="btn btn-success">Add Cart</button>
</form>

<br><br>
<button class="btn btn-primary">Buy Now</button>
</div>

</div>


</div>



@endsection