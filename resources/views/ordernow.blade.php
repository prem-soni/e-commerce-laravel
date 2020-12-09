@extends('master')
@section('content')
  <div class="custom-product">
     <div class="col-sm-8">
     <table class="table table-bordered">
    
    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{$total + 10}}</td>
      </tr>
    </tbody>
  </table>
  <div class="container">
  <form action="/orderplace" method="POST">
  @csrf
  <div class="form-group">
    <label for="email">Address:</label>
    <textarea id="form10" name="address" class="md-textarea form-control" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method:</label><br><br>
    <input type="radio" value="cash" name="payment"><span>online payment</span><bR><br>
    <input type="radio"  value="cash" name="payment"><span>EMI payment</span><br><br>
    <input type="radio"  value="cash" name="payment"><span>Payment on Delivery</span><br><br>
  </div>
 
  <button type="submit" class="btn btn-default">Order Now</button>
</form>
 
    
  </div>
     </div>
  </div>
@endsection