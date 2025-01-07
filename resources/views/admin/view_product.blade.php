<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Document</title>
    @include('admin.css')

    <style type="text/css">
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .table-deg{
            border: 2px solid greenyellow;
        }

        th{
            background-color: skyblue;
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }

        td{
            border: 1px solid skyblue;
            text-align: center;
        }

        
        h1{
            display: flex;
            justify-content: center;
            font-weight: bolder;
            color:purple;
        }
    </style>

</head>
<body>

    <div class="container-scroler">
        @include('admin.nav_upper')
        <div class="container-fluid page-body-wrapper">
           @include('admin.nav_sidebar')
           <div class="main-panel">
                <div class="content-wrapper">
                   <div class="bg-transparent" >

                   <form action="{{url('product_search')}}" method="get">
                    @csrf
                    <input type="search" name="search" id="">
                    <input type="submit" class="btn btn-secondary" value="Search">
                   </form>
                   
                    <div class="div-pad py-2">
                   <h1>Products</h1>

                   <div class="div_deg">
                    <table class="table-deg">
                        <tr>
                            <th>Product title</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                       @foreach($product as $products)
                        <tr>
                            <td>{{$products->title}}</td>
                            <td>{!!Str::limit($products->description,50)!!}</td>
                            <td>{{$products->category}}</td>
                            <td>{{$products->price}}</td>
                            <td>{{$products->quantity}}</td>
                            <td>
                                <img height="120" width="120" src="products/{{$products->image}}">
                            </td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{url('update_product',$products->slug)}}">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger btn-sm" onclick="confirmation(event)" href="{{url('delete_product',$products->id)}}">Delete</a>
                            </td>
                        </tr>

                        @endforeach
                    </table>
                   </div>

                   <div class="div_deg">
                   {{$product->onEachSide(1)->links()}}
                   </div>

                </div>

            </div>
        </div>
    </div>

    
</body>
</html>