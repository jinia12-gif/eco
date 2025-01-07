<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style>
      .div-dig{
        display: flex;
        justify-content: center;
        align-items: center;
      }
      label{
        display: inline-block;
        width: 200px;
        padding: 20px;
      }
      textarea{
        width: 223px;
        height: 100px;
      }
      .sub{
        display: flex;
        justify-content: center;
        align-items: center;
      }
    </style>
  </head>
  <body>
  <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      @include('admin.nav_upper')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('admin.nav_sidebar')
           
         <!-- main panel -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="bg-transparent" >
                    
                  <h2>Update Product</h2>

                  <div class="div-dig">
                    <form action="{{url('edit_product',$data->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
                     <div>
                        <label>Title</label>
                        <input type="text" name="title" value="{{$data->title}}">
                      </div>
                      <div>
                        <label>Description</label>
                        <textarea name="description">{{$data->description}}</textarea>
                      </div>
                      <div>
                        <label>Price</label>
                        <input type="text" name="price" value="{{$data->price}}">
                        
                      </div>
                      <div>
                        <label>Quantity</label>
                        <input type="number" name="quantity" value="{{$data->quantity}}">
                        
                      </div>
                      <div>
                        <label>Category</label>
                        <select name="category">
                          <option value="{{$data->category}}">{{$data->category}}</option>

                          @foreach($category as $category)

                          <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                          @endforeach
                        </select>
                        
                      </div>
                      <div>
                        <label for="">Current Image</label>
                        <img width="150" src="/products/{{$data->image}}" alt="">
                      </div>
                      <div>
                        <label>New Image</label>
                        <input type="file" name="image">
                      </div>
                      <div class="sub">
                        <input class="btn btn-success btn-bg" type="submit" value="Update Product">
                      </div>
                    </form>
                  </div>


                </div>
            </div>
        </div>
      </div>
    <!-- page-body-wrapper ends -->
</div>
    <!-- plugins:js -->
    @include('admin.js')
  </body>
</html>