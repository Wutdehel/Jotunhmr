<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jötunheimr</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="{{ url('generateLaporan') }}">Jötunheimr<span>Travel Agency</span></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="{{ url('welcome') }}" class="nav-link">Home</a></li>
        <li class="nav-item active"><a href="{{ url('about') }}" class="nav-link" active>About</a></li>
        <li class="nav-item"><a href="{{ url('destination') }}" class="nav-link">Destination</a></li>
        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
      </ul>
     </div>
   </div>
 </nav>
 <!-- END nav -->
 
 <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('generateLaporan') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">About Us</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section services-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
       <div class="w-100">
        <span class="subheading">Welcome to Pacific</span>
        <h2 class="mb-4">It's time to start your adventure</h2>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
        A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        <p><a href="#" class="btn btn-primary py-3 px-4">Search Destination</a></p>
      </div>
    </div>
    <div class="col-md-6">
     <div class="row">
      <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
        <div class="services services-1 color-1 d-block img" style="background-image: url(images/services-1.jpg);">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-paragliding"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Activities</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary</p>
          </div>
        </div>      
      </div>
      <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
        <div class="services services-1 color-2 d-block img" style="background-image: url(images/services-2.jpg);">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Travel Arrangements</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary</p>
          </div>
        </div>    
      </div>
      <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
        <div class="services services-1 color-3 d-block img" style="background-image: url(images/services-3.jpg);">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tour-guide"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Private Guide</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary</p>
          </div>
        </div>      
      </div>
      <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
        <div class="services services-1 color-4 d-block img" style="background-image: url(images/services-4.jpg);">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-map"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Location Manager</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary</p>
          </div>
        </div>      
      </div>
    </div>
  </div>
</div>
</div>
</section>


<section class="ftco-section ftco-about img"style="background-image: url(images/bg_4.jpg);">
 <div class="overlay"></div>
 <div class="container py-md-5">
  <div class="row py-md-5">
   <div class="col-md d-flex align-items-center justify-content-center">
    <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
     <span class="fa fa-play"></span>
   </a>
 </div>
</div>
</div>
</section>

<section class="ftco-section ftco-about ftco-no-pt img">
 <div class="container">
  <div class="row d-flex">
   <div class="col-md-12 about-intro">
    <div class="row">
     <div class="col-md-6 d-flex align-items-stretch">
      <div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url(images/about-1.jpg);">
      </div>
    </div>
    <div class="col-md-6 pl-md-5 py-5">
      <div class="row justify-content-start pb-3">
        <div class="col-md-12 heading-section ftco-animate">
         <span class="subheading">About Us</span>
         <h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
         <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
         <p><a href="#" class="btn btn-primary">Book Your Destination</a></p>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
</div>
</section>

<section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_1.jpg);">
 <div class="overlay"></div>
 <div class="container">
  <div class="row justify-content-center pb-4">
    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
     <span class="subheading">Testimonial</span>
     <h2 class="mb-4">Tourist Feedback</h2>
   </div>
 </div>
 <div class="row ftco-animate">
  <div class="col-md-12">
    <div class="carousel-testimony owl-carousel">
      <div class="item">
        <div class="testimony-wrap py-4">
          <div class="text">
           <p class="star">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </p>
          <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <div class="d-flex align-items-center">
           <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
           <div class="pl-3">
            <p class="name">Roger Scott</p>
            <span class="position">Marketing Manager</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="testimony-wrap py-4">
      <div class="text">
       <p class="star">
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </p>
      <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      <div class="d-flex align-items-center">
       <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
       <div class="pl-3">
        <p class="name">Roger Scott</p>
        <span class="position">Marketing Manager</span>
      </div>
    </div>
  </div>
</div>
</div>
<div class="item">
  <div class="testimony-wrap py-4">
    <div class="text">
     <p class="star">
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
    </p>
    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    <div class="d-flex align-items-center">
     <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
     <div class="pl-3">
      <p class="name">Roger Scott</p>
      <span class="position">Marketing Manager</span>
    </div>
  </div>
</div>
</div>
</div>
<div class="item">
  <div class="testimony-wrap py-4">
    <div class="text">
     <p class="star">
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
    </p>
    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    <div class="d-flex align-items-center">
     <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
     <div class="pl-3">
      <p class="name">Roger Scott</p>
      <span class="position">Marketing Manager</span>
    </div>
  </div>
</div>
</div>
</div>
<div class="item">
  <div class="testimony-wrap py-4">
    <div class="text">
     <p class="star">
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
    </p>
    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    <div class="d-flex align-items-center">
     <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
     <div class="pl-3">
      <p class="name">Roger Scott</p>
      <span class="position">Marketing Manager</span>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2">About</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md pt-5 border-left">
        <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
          <h2 class="ftco-heading-2">Infromation</h2>
          <ul class="list-unstyled">
            <li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
            <li><a href="#" class="py-2 d-block">General Enquiries</a></li>
            <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
            <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
            <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
            <li><a href="#" class="py-2 d-block">Call Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md pt-5 border-left">
       <div class="ftco-footer-widget pt-md-5 mb-4">
        <h2 class="ftco-heading-2">Experience</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">Adventure</a></li>
          <li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
          <li><a href="#" class="py-2 d-block">Beach</a></li>
          <li><a href="#" class="py-2 d-block">Nature</a></li>
          <li><a href="#" class="py-2 d-block">Camping</a></li>
          <li><a href="#" class="py-2 d-block">Party</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md pt-5 border-left">
      <div class="ftco-footer-widget pt-md-5 mb-4">
       <h2 class="ftco-heading-2">Have a Questions?</h2>
       <div class="block-23 mb-3">
         <ul>
           <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
           <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
           <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 <div class="row">
  <div class="col-md-12 text-center">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
  </div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>