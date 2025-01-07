<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style>
      .table-deg{
        text-align: center;
        margin: auto;
        border: 2px solid yellowgreen;
        margin-top: 50px;
        width: 600px;
      }
      th{
        background-color: skyblue;
        padding: 15px;
        font-size: 20px;
        font-weight: bold;
        color: white;
      }
      td{
        color: black;
        padding: 10px;
        border: 1px solid skyblue;
      }
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
  <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      @include('admin.nav_upper')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('admin.nav_sidebar')
        <div class="main-panel">
          <div class="content-wrapper">
             
              <div class="card mt-5 mx-auto bg-transparent" style="width: 500px;">
                <div class="card-body">
                  <h3>Add New Category</h3>
                  <form action="{{url('add_category')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text" name="category" class="form-control" placeholder="Category Name">
                        </div>

                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="">------- Select Status ------</option>
                                <option value="1">Enabled</option>
                                <option value="0">Disabled</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-sm btn-success">Save Category</button>

                  </form>
                </div>
              </div>

              <div>
                <table class="table-deg">
                  <tr>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Edit Category</th>
                    <th>Delete Category</th>
                  </tr>
                  
                  @foreach($data as $data)
                  <tr>
                    <td>{{$data->category_name}}</td>
                    <td>{{ $data->status == 1 ? 'Enabled' : 'Disabled' }}</td>
                    <td>
                      <a class="btn btn-success" href="{{url('edit_category',$data->id)}}">Edit</a>
                    </td>
                    <td>
                      <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category',$data->id)}}">Delete</a>
                    </td>

                  </tr>
                  @endforeach
                </table>
              </div>

                
          </div>
        </div>
    </div>
</div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
     <script type="text/javascript">

      function confirmation(ev)
      {
        ev.preventDefault();

        var urlToRedirect = ev.currentTarget.getAttribute('href');

        console.log(urlToRedirect);

        swal({
          title:"Are you sure to Delete this",
          text:"This delete will be permanent",
          icon:"warning",
          buttons:true,
          dangerMode:true,
        })

        .then((willcancel)=>{

          if(willcancel)
        {
          window.location.href=urlToRedirect;
        }

        });
      }

     </script>
    @include('admin.js')
  </body>
</html>