@extends("master")
@section("content")
<h1 class="order-pg">ORDER PAGE</h1>
<div class="custom-order">
   <div class="col-sm-6">
   <table class="table table-hover">
    <thead>
      <tr>
        <th>Price</th>
        <th>{{$totals}}</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tax</td>
        <td>0 $</td>
        
      </tr>
      <tr>
        <td>Delivery</td>
        <td>0$</td>
       
      </tr>
      <tr>
        <td>Total Amount $</td>
       
        <td>{{$totals+100}}</td>
        
      </tr>
    </tbody>
  </table>

  <form action="orderplace" method="POST">
    @csrf
  <div class="form-group">
  <label >Address</label><br>
  <textarea name="address" placeholder="enter our address"></textarea>
  </div>
  <label for="">PAYMENT METHOD</label><br>
  <div class="checkbox">
  <input type="radio" id="paypal" name="payment" value="paypal">
 <label for="pay">Paypal</label><br>
 <input type="radio" id="paypal" name="payment" value="paypal">
 <label for="pay">on del</label><br>
 <input type="radio" id="paypal" name="payment" value="paypal">
 <label for="pay">bank</label><br>
  </div>
  <button type="submit" class="btn btn-success">continue to checkout</button><br><br>
</form>





  </div>
</div>

@endsection 

