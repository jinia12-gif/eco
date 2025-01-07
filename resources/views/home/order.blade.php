<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    @include('home.css')
    <style type="text/css">
        .div_center{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }
        table{
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }
        td{
            text-align: center;
            border: 2px solid red;
            font-size: 19px;
            padding: 10px;

        }
        th{
            border: 2px solid red;
            font-size: 19px;
            font-weight: bold;
            background-color:palevioletred;
            color: black;
            text-align: center;
        }
    </style>
</head>
<body>
@include('home.header')


<div class="div_center">
<table >
    <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Delivery status</th>
        <th>Image</th>
    </tr>

    @foreach($order as $order)
    <tr>
        <td>{{$order->product->title}}</td>
        <td>{{$order->product->price}}</td>
        <td>{{$order->status}}</td>
        <td>
            <img width="200" height="150" src="products/{{$order->product->image}}" alt="">
        </td>
    </tr>
    @endforeach
</table>
</div>






@include('home.testislider')

@include('home.footer')

@include('home.js')
</body>
</html>