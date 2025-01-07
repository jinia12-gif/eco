<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">
        table{
            border: 2px solid skyblue;
            align-items: center;
            

        }

        th{
            background-color: skyblue;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            
        }
        td{
            text-align: center;
            border: 2px solid skyblue;
            padding: 5px;
        }

        .tab-cen{
            justify-content: center;
            align-items: center;
            display: flex;
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
        <div class="main-panel ">
            <div class="content-wrapper"> 
                <div class="bg-transparent " >

                <div class="tab-cen ">
                <table>
                    <tr>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product title</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Payment Status</th>
                        <th>Status</th>
                        <th> Change Status</th>
                        <th>Print PDF</th>
                    </tr>
                  @foreach($data as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->rec_address}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->product->title}}</td>
                        <td>{{$data->product->price}}</td>
                        <td>
                        <img width="150" src="products/{{$data->product->image}}" alt="">
                        </td>
                        <td>{{$data->payment_status}}</td>
                        <td>
                            @if($data->status == 'in progress')

                            <span style="color:purple" >{{$data->status}}</span>

                            @elseif($data->status == 'on the way')

                            <span style="color:red">{{$data->status}}</span>

                            @else

                            <span style="color: orange;">{{$data->status}}</span>

                            @endif
                        </td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{url('on_the_way',$data->id)}}">on the way</a>
                            <a class="btn btn-sm btn-success" href="{{url('delivered',$data->id)}}">Delivered</a>
                        </td>
                        <td>
                            <a class="btn btn-secondary btn-sm" href="{{url('print_pdf',$data->id)}}">Print PDF</a>
                        </td>
                    </tr>
                   @endforeach
                </table>
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