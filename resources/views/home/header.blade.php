<header class="bg-dark py-2">
            <nav class="navbar fixed-top bg-dark" data-spy="affix" data-offset-top="197">
                <div class="container-fluid ">
                  <div class="preview__envato-logo " >
                    <a class="header-envato_market"   href=""><img src="upload/envato_market-dde916a48af7413e54aa058fe7ae6856752fca799da4bec355f00aea904bfa19.svg" alt=""></a>
                  </div>
      
                  <a href="">
                    <button class="btn-outline-warning text-bg-dark ">Buynow</button>
                  </a>
                </div>
             </nav>            
    </header>
  <!-- Large screens (lg and above) -->
  <nav class="bg-light d-none d-lg-block">
    <div class="container-fluid pt-5">
    <div class="row">
      <div class="col-lg-4 d-flex pt-3">
          <a class="dropdown-toggle nav-link" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            English
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li ><a class="dropdown-item" href="#">Menu item</a></li>
            <li ><a class="dropdown-item" href="#">Menu item</a></li>
            <li ><a class="dropdown-item" href="#">Menu item</a></li>
          </ul>
          <div class="mx-3">|</div>
          <a class=" dropdown-toggle nav-link" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li ><a class="dropdown-item" href="{{url('my_orders')}}">My Orders</a></li>
            <li ><a class="dropdown-item" href="{{url('dashboard')}}">Dashboard</a></li>
            <li ><a class="dropdown-item" href="{{url('/')}}">Home</a></li>
          </ul>
      </div>
      <div class="col-lg-4 d-flex justify-content-center">
        <span>
          <img src="upload/logo.png" alt="">
        </span>
      </div>
      
      <div class="col-lg-4 d-flex justify-content-end">
        
        <form class="py-1 mx-1" action=""><input aria-hidden="true" type="search" placeholder="Search"></form>

        <a class="nav-link" href="{{url('mycart')}}">
            
          <i class="fa fa-shopping-bag pt-2 " aria-hidden="true"></i>
          [{{$count}}]
          
        </a>
        
        <div class="dropdown mx-1">
          
          @if (Route::has('login'))

            @auth
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button  class="btn btn-danger" href="route('logout')"onclick="event.preventDefault();this.closest('form').submit();">{{ __('Logout') }}</button>
              </form>

              @else

              <button class="btn dropdown-toggle toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-bars bar-icon"></i>
              </button>
              <ul class="dropdown-menu menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="{{url('/login')}}"><i class="fa fa-user"></i><span>LogIn </span></a></li>
              <li><a class="dropdown-item" href="{{url('/register')}}"><span><i class="fa fa-vcard"></i></span>Register</a></li>
          
            @endauth

          @endif
        
          </ul>
        </div>
      </div>
    </div>
    </div>
  </nav>