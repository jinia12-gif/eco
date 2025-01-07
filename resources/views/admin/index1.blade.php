<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
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