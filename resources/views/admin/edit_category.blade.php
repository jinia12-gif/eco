<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('admin.css')

    <style>
        .form-group{
        text-align: center;
      }

      .card-body{
        text-align: center;
        
      }
      .card{
        border: 2px solid black;
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

                <div class="card mt-5 mx-auto bg-transparent" style="width: 500px;">
                <div class="card-body">
                  <h3>Update Category</h3>
                  <form action="{{url('update_category',$data->id)}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text" name="category" class="form-control" value="{{$data->category_name}}" placeholder="Category Name">
                        </div>

                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="">------- Select Status ------</option>
                                <option value="1">Enabled</option>
                                <option value="0">Disabled</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-sm btn-success">Update Category</button>

                  </form>
                </div>
              </div>

                </div>
            </div>
        </div>
    </div>

    @include('admin.js')  
</body>
</html>