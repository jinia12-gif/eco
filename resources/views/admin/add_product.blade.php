<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('admin.css')

    <style>
        .div_dig{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        label{
            display: inline-block;
            width: 250px;
            font-size: 18px!important;
        }

        input[type='text']{
            width: 350px;
            height: 50px;
        }
        textarea{
            width: 450px;
            height: 80px;
        }
        .input_deg{
            padding: 15px;
        }

        .div-pad{
           border: 2px solid purple;
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
                    <div class="div-pad py-2">
                   <h1>Add Product</h1>
                   <div class="div_dig">
                           <form action="{{url('upload_product')}}" method="Post" enctype="multipart/form-data">

                           @csrf

                               <div class="input_deg">
                                   <label for="">Product Title</label>
                                   <input type="text" name="title" required>
                                </div>
                                <div class="input_deg">
                                   <label for="">Discription</label>
                                    <textarea type="text" name="description" required></textarea>
                                </div>
                                <div class="input_deg">
                                    <label for="">Price</label>
                                    <input type="text" name="price">
                                </div>
                                 <div class="input_deg">
                                    <label for="">Quantity</label>
                                    <input type="number" name="qty">
                                </div>
                                <div class="input_deg">
                                    <label for="">Product Category</label>
                                    <select name="category" required>
                                       <option value="">select a option</option>

                                       @foreach($category as $category)

                                       <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                                       @endforeach
                                    </select>
                                </div>
                                <div class="input_deg">
                                    <label for="">Product Image</label>
                                    <input type="file" name="image">
                                </div>
                                <div class="input_deg">
                                    
                                    <input class="btn btn-success " type="submit" value="Add Product" >
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.js')  
</body>
</html>