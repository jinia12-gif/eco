<!DOCTYPE html>
<html lang="en">
  <head>
@include('home.css')


<style class="text/css">

  .dev_deg{
    justify-content: center;
    display: flex;
    align-items: center;
    margin: 40px;
  }
  table{
    border: 2px solid red;
    text-align: center;
    width: 800px;
  }
  th{
    border: 2px solid red;
    text-align: center;
    color: white;
    font: 20px;
    font-weight: bold;
    background-color: black;

  }
  td{
    border: 2px solid red;
    text-align: center;
    color: black;
    font: 20px;
    font-weight: bold;
    
  }
  h2{
    display: flex;
    justify-content: center;
    margin-top: 40px;

  }

  .cart_value{
    text-align: center;
    justify-content: center;
    display: flex;
    padding: 18px;
  }

  .order_deg{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 50px;
    
  }

  .order_dig{
    border: solid 2px green;
    padding: 15px;
  }

  label{
    margin: 5px;
    width: 150px;
  }
  .bto{
    display: flex;
    justify-content: center;
    padding: 10px;
  }

  textarea{

    padding: 5px;
    margin-top: 8px;
    width: 232px;

  }

</style>

  </head>
<body>
  
  <!-- header -->
@include('home.header') 





<h2>Products</h2>

<div class="dev_deg">


<table>
  <tr>
    <th>Title</th>
    <th>Price</th>
    <th>Image</th>
    <th>Remove</th>
  </tr>

  <?php
    
    $value = 0;

  ?>

  @foreach($cart as $cart)

  <tr>
    <td>{{$cart->product->title}}</td>
    <td>{{$cart->product->price}}</td>
    <td>
      <img width="150" src="/products/{{$cart->product->image}}">
    </td>
    <td><a class="btn btn-danger" href="{{url('delete_cart',$cart->id)}}">Remove</a></td>
  </tr>

  <?php

    $value = $value + $cart->product->price;

  ?>

  @endforeach

</table>
</div>

<div class="cart_value">
  <h3>Total Value of the Cart is : ${{$value}}</h3>
</div>



<div class="order_deg">
  <form class="order_dig" action="{{url('comfirm_order')}}" method="post">
    @csrf
    <div>
      <label for="">Receiver Name:</label>
      <input type="text" name="name" value="{{Auth::user()->name}}">
    </div>
    <div>
      <label for="">Receiver Address:</label>
      <textarea type="text" name="address" value="">{{Auth::user()->address}}</textarea>
    </div>
    <div>
      <label for="">Receiver Phone:</label>
      <input type="text" name="phone" value="{{Auth::user()->phone}}">
    </div>
    <div class="bto">
      <input  class="btn btn-success mx-2" type="submit" value="Cash on Delivary">
      <a class="btn btn-danger mx-2" href="{{url('stripe',$value)}}">Pay using card</a>
    </div>
   
  </form>
</div>

  
  
@include('home.testislider')
<!-- footer -->

@include('home.footer')



  







<!-- link js --> 
@include('home.js') 
</body>
</html>