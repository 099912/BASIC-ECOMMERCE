<?php
$total=0;
use App\Http\Controllers\ProductController;


if(Session::has('user')){
  $total=ProductController::cartItem();
}
// $user = (array) json_decode(Session::get('user'));
// $username = $user['name'];

?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="product">E-COM</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Product</a></li>
      <li><a href="myorders">Orders</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="search">
      <div class="form-group">
        <input type="text" name="query" class="search-box" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-search">Search</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
          <li><a href="cartlist">AddCart ({{$total}})</a></li>
         @if(Session::has('user'))
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}} <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="out" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out" ></span> Log out
        </a></li>
        </ul>
      </li>
        @else
        <li><a href="login">Login</a></li>
        @endif
        </div>
</nav>
