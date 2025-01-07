<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Customer Name :{{$data->name}}</h2>

        <h3>Customer Address :{{$data->rec_address}}</h3>

        <h3>Customer Phone :{{$data->phone}}</h3>

        <h3>product title :{{$data->product->title}}</h3>

        <h3>price :{{$data->product->price}}</h3>

        <img width="300" height="200" src="products/{{$data->product->image}}" alt="">


    </center>
</body>
</html>