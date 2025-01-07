<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biman Bangladesh Airlines Ltd </title>
    <link rel="icon" href="{{asset('upload/img/BG-Logo-R (1).png')}}">
    
    @include('home.css')
</head>
<body>

    <!-- header starts from here -->
    <header>
        <div class="container py-3">
            <div class="row">
                <div class="col-md-6">
                <span><a href="/">Home</a></span>

                </div>
                <div class="col-md-6">
                <span><i class="fa-solid fa-phone"></i>+8801990997997</span>
                <span class="mx-3"><i class="fa-solid fa-envelope"></i>ibebiman@bdbiman.com</span>
                <span id="flag" class="flag-icon flag-icon-bd mr-1" style="height: 14px;"></span>

                </div>
            </div>
        </div>
        <hr>
    </header>
    <!-- header ends here -->
    <!-- navbar starts from here -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="{{asset('upload/img/Biman-Bangladesh-Airlines-Logo.png')}}" alt="logo1" width="250px" height="120px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
    
              <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mx-5 p-0 m-0 mb-lg-0">
                        <li class="nav-item dropdown"><a class="nav-link active mx-4" aria-current="page" data-bs-toggle="dropdown" href="#">Book Flight</a>
                            <ul class="dropdown-menu size1">
                               <div class="container">
                                           <div class="row">
                                    <div class="col-6">
                                            <li>
                                                <a class="dropdown-item" href="#">Book A Flight</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item " href="#">Manage My Trip</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Flight Status</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Flight Schedule</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Web Check-In</a>
                                            </li>
                                    </div>
                                    <div class="col-6">
                                        <li>
                                            <a class="dropdown-item" href="#">Domestic Office</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">National Office</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Feed Back</a>
                                        </li>
        
                                    </div>
                                </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle mx-4" data-bs-toggle="dropdown" href="#">Travel Info</a>
                            <ul class="dropdown-menu size2">
                               <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                            <li>
                                                <a class="dropdown-item" href="#">Travel Advisory</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">FAQ's</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Latest News</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Genaral Information</a>
                                            </li>
                                    </div>
                                    <div class="col-6">
                                        <li>
                                            <a class="dropdown-item" href="#">Baggage Info</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Refund Request &</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Terms And Conditions</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Check Refund Status</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Policy</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Tariff Manual</a>
                                        </li>
        
                                    </div>
                                </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle mx-4" data-bs-toggle="dropdown" href="#">Contact</a>
                        <ul class="dropdown-menu size3">
                            <li>
                                <a class="dropdown-item" href="#">Domestic Office</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">National Office</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Feed Back</a>
                            </li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown mx-4"><a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Loyalty Club</a>
                            <ul class="dropdown-menu size-4">
                               <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                            <li>
                                                <a class="dropdown-item" href="#">About Us</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Become A Member</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Terms & Conditions</a>
                                            </li>
                                    </div>
                                    
                                </div>
                                </div>
                            </ul>
                        </li>
                    </ul>
            </div>
        </div>
    </nav>
    <!-- navbar ends here -->

<!-- start hero wraper widget area -->

    <section class="hero-wrapper hero-wrapper2 py-5">
        <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
  <li  class="nav-item mx-1" role="presentation" >
    <button class="nav-link active jinia" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><span><i class="fa-solid fa-plane-up mx-1"></i></span>Book Flight</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link jinia" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"><span><i class="fa-solid fa-suitcase mx-1"></i></span>Modify Trip</button>
  </li>
  <li class="nav-item mx-1" role="presentation">
    <button class="nav-link jinia" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false"><span><i class="fa-regular fa-circle-check mx-1"></i></span>Web Check-in</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link jinia" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false"><span><i class="fa-solid fa-circle-info mx-1"></i></span>Flight Status</button>
  </li>
  <li class="nav-item mx-1" role="presentation">
    <button class="nav-link jinia" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false"><span><i class="fa-regular fa-clock mx-1"></i></span>Flight Schedule</button>
  </li>
</ul>
<div class="tab-content py-3 mx-5" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
    <ul class="nav nav-pills mb-3 mx-5" id="pills-tab" role="tablist">
  <li class="nav-item mx-1" role="presentation">
    <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">One way</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Round-trip</button>
  </li>
  <li class="nav-item mx-1" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Multi-city</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
    <div class="row g-2" >
        <div class="col-md">
            <div class="form-floating mx-2">
      <select class="form-select" id="floatingSelectGrid">
        <option selected>Flying From</option>
        <option value="1">Dhaka </option>
        <option value="2">Khulna</option>
        <option value="3">syhlet</option>
        <option value="3">Abu dhabi</option>
        <option value="3">Chittagong</option>
        <option value="3">jessore</option>
      </select>
      <label for="floatingSelectGrid">Departure city or airport</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating mx-2">
      <select class="form-select" size="3" aria-label="size 3 select example">3
  <option selected>Flying To</option>
  <option value="1">Dhaka</option>
  <option value="2">khulna</option>
  <option value="3">Borisal</option>
  <option value="3">Soudi Aribia</option>
  <option value="3">pakistan</option>
  <option value="3">India</option>
</select>
      <label for="floatingSelectGrid">Departure city or airport</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 py-3">
       <div class="form-group form-floating">
         <label class="label-text">Promo code</label>
        <input type="text" id="input promocode" class="form-control" name="input promocode" placeholder="white promo code">
       </div>
    </div>
    <div class="col-md-4 py-5 mx-2 ">
        <div class="custom-checkbox">
            <input type="checkbox" name="flexibleDate" id="flexibleDate">
            <label for="flexibleDate">Show lowest fare</label>
        </div>

    </div>
    <div class="col-md-12 py-3 mx-3">
        <button class="btn btn-success w-100" type="button"><span><i class="fa-solid fa-paper-plane"></i></span>Search</button>
    </div>
  </div>

    </div>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
</div>

</div>
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
</div>
   





     
    </section>
    <!-- end hero wraper widget area -->

    <!--start content -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <p class=" welcome">Welcome on board</p>
                <h1 class="fly ">Fly with Biman right away</h1>
                <p class="welcome pt-4">It is our immense pleasure to inform you that Biman has incorporated world class Booking Engine for its cherished passengers to provide the best service. Enjoy amazing discounts, get your e-ticket, customize your booking, and find out the status of your flight in real time through our Website. <br>
                Watch the video right away, follow some simple steps and it will guide you to complete your reservation smoothly with the best ticket price.</p>
                <a class="btn" href="">Watch Now <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="col-lg-2 img-item-2"><a href=""><img src="{{asset('upload/img/jinia.png')}}" alt="about-img"></a></div>
                    </div>
                    <div class="col-lg-10">
                        <div class="image-box about-img-box">
                    <a target="_blank" href="">
                        <img src="{{asset('upload/img/newyear23.jpg')}}" alt="about-img" class="img__item img__item-1 w-100 ">
                    </a>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->
    <!-- start content-card here -->

    <!-- end content-card here -->
    <section class="dhaka py-5">
        <div class="container py">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h2 class="feat">Featured Destinations From Dhaka</h2>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('upload/img/bangladesh-index.jpg')}}" width="100%" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('upload/img/india-index.jpg')}}" width="100%" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('upload/img/london-index-1.jpg')}}" width="100%" alt="">
                    </div>
                </div>
                <div class="container py-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{asset('upload/img/dubai-index.jpg')}}" width="100%" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{asset('upload/img/singapore.jpg')}}" width="100%" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{asset('upload/img/toronto-index.jpg')}}" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section starts here -->
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Sky-high Discounts!</h2>
                        <p class="sec__desc pt-2">Enjoy Incredible Savings On Airfare with us</p>
                    </div>
                </div>
            </div>
        </div>
    </section> 
       <!-- section ends here -->
        
        <!-- slider starts from here -->
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active " data-bs-interval="">
                    <a href="#"><img src="{{asset('upload/img/narita-japan_rev_4.png')}}" alt="" width="100%"></a>
                </div>
                <div class="carousel-item" data-bs-interval="">
                    <a href="#"><img src="{{asset('upload/img/china2023_web.png')}}" alt="" width="100%"></a>
                </div>
                <div class="carousel-item " data-bs-interval="">
                    <a href="#"><img src="{{asset('upload/img/howto.jpg')}}" alt="" width="100%"></a>
                </div>
                <div class="carousel-item" data-bs-interval="">
                    <a href="#"><img src="{{asset('upload/img/newyear23.jpg')}}" alt="" width="100%"></a>
                </div>
            </div>
        </div>
    <!-- slider ends here -->
    <br>
    <br>
    <!-- footer starts from here -->
    <footer>
        <div class="container py-5">
            <div class="row pb-5">
                <div class="col-6">
                    <h1 class="today">Join Our Loyalty Club Today</h1>
                    <h5 class="offers">Enjoy the rewards of membership,earn miles,and get access to special offers.</h5>
                </div>
                <div  id="member" class="col-6">
                    <a href="" class="btn btn-success btn-lg btn1">Become A Member</a>
                </div>
            </div>
            <div class="row row1">
                <div class="col-3">
                    <div>
                        <a class="" href="">
                            <img src="{{asset('upload/img/Biman-Bangladesh-Airlines-Logo.png')}}" width="200px">
                        </a>
                    </div>
                    <ul class="list-item pt-1 p-0 m-0 list-style-none">
                        <li>
                            <i class="fa-solid fa-building mr-1"></i>
                            "Head Office,"
                            <br>
                            "Balaka, Kurmitola,"
                            <br>
                            "Dhaka-1229,Bangladesh."
                        </li>
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            "+88-02-8901600"
                        </li>
                    </ul>
                </div>
                <div class="col-3 py-5">
                    <div>
                        <h4 class="title custom-footer-title curve-shape pb-3 margin-bottom-20px m-0">Useful Links</h4>
                        <ul class="list-item list-item--item">
                            <li><a href="#">News & Announcement</a></li>
                            <li><a href="#">Feedback</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Tender</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-3 py-5">
                    <div>
                        <h4 class="title custom-footer-title curve-shape pb-3 margin-bottom-20px m-0">Other Links</h4>
                        <ul class="list-item list-item--item">
                            <li><a href="#">Biman Govt.Portal</a></li>
                            <li><a href="#">Biman Flight Catering Center-BFCC</a></li>
                            <li><a href="#">Civil Aviation Authority,Bangladesh</a></li>
                            <li><a href="#">Ministry of Health and Family Welfare</a></li>
                            <li><a href="#">Parjatan Corporation</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-3 py-5">
                    <div>
                        <h4 class="title custom-footer-title curve-shape pb-3 margin-bottom-20px m-0">Travel Agents</h4>
                        <ul class="list-item list-item--item">
                            <li><a href="#">Online Travel Agency</a></li>
                            <li><a href="#">Booking Policy</a></li>
                            <li><a href="#">ADM Policy</a></li>
                        </ul>
                    </div>

                </div>
                <div class="row row2">
                    <div class="col-6 faq">
                        <span class="mx-3"><a href="">CEO's Message</a></span>
                        <span class="mx-3"><a href="">Terms & Conditions</a></span>
                        <span class="mx-3"><a href="">Privacy Policy</a></span>
                        <span class="mx-3"><a href="">FAQs</a></span>
                    </div>
                    <div class="col-6 social">
                        <a class="social1" href="#"><span class="book"><i class="fa-brands fa-facebook-f mx-3"></i></span></a>
                        <a class="social2" href="#"><span class="tube"><i class="fa-brands fa-youtube mx-3"></i></span></a>
                    </div>
                </div>
                <div id="copyright" class=" py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 Division">
                                <p class="text-success">&copy;IT Division <img src="{{asset('upload/img/p-amex.png')}}" width="20px" alt="" width="80"><a class="text-success" href="#">Biman Bangladesh Airlines</a></p>
                            </div>
                            <div class="col-6 express">
                                    <p class="accept">We Accept</p>bt
                                    <p><img src="{{asset('upload/img/p-amex.png')}}" width="50px" alt=""></p>
                                    <p><img src="{{asset('upload/img/p-bkash.png')}}" width="50px" alt=""></p>
                                    <p><img src="{{asset('upload/img/p-nagad.png')}}" width="50px" alt=""></p>
                            </div>

                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </footer>
    <!-- footer ends here -->
    @include('home.js')
</body>
</html>

