<!DOCTYPE html>
<html lang="en">

<head>
    <!--
     - Roxy: Bootstrap template by GettTemplates.com
     - https://gettemplates.co/roxy
    -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Roxy by GetTemplates.co</title>
    <meta name="description" content="Roxy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/lightcase/lightcase.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar-nav-header" class="static-layout">
	<div class="boxed-page">
		<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center text-white" href="/">
                    <a href="/home" class="logo">
                        <img src="assets/images/logo.png" >
                    </a>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="lnr lnr-menu"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-nav-header">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" active  href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>




                        <li class="nav-item">
                            <a id="side-search-open" class="nav-link" href="#">
                                <span class="lnr lnr-magnifier"></span>
                            </a>
                        </li>
                         <li class="nav-item only-desktop">
                            <a class="nav-link" id="side-nav-open" href="#">
                                <span class="lnr lnr-menu"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="side-nav" class="sidenav">
            <a href="javascript:void(0)" id="side-nav-close">&times;</a>

            <div class="sidenav-content">
                <button type="button" class="btn btn-outline-primary">
                    <div class="sidenav-content">
                        @if (Route::has('login'))

                        @auth
                            <li>
                            <x-app-layout>

                            </x-app-layout>
                             </li>
                    @else
                            <a href="{{ route('login') }}">Log in</a>

                                @if (Route::has('register'))
                                   <a href="{{ route('register') }}">Register</a>
                                 @endif
                        @endauth

                    @endif


                    </div>
                    </button>
            </div>
        </div><div id="side-search" class="sidenav">
            <a href="javascript:void(0)" id="side-search-close">&times;</a>
            <div class="sidenav-content">
                <form action="">

                    <div class="input-group md-form form-sm form-2 pl-0">
                      <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
                      <div class="input-group-append">
                        <button class="input-group-text red lighten-3" id="basic-text1">
                            <span class="lnr lnr-magnifier"></span>
                        </button>
                      </div>
                    </div>

                </form>
            </div>

        </div>			<div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url(img/bg.jpg)">
  <div class="container text-center">
    <h1 class="display-2 mb-4">Contact Us</h1>
  </div>
</div>		<!-- Contact Form Section -->
<section id="contact-form" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap" data-aos="fade-up">
                <h2 class="section-title">Get In Touch</h2>
                <p class="section-sub-title">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. <br> pharetra augue. Donec id elit non mi.</p>
            </div>
            <!-- End of Section Title -->
            <div class="row">
                <!-- Contact Form Holder -->
                <div class="col-md-8 offset-md-2 contact-form-holder mt-4" data-aos="fade-up">
                    <form method="post" name="contact-us" action="">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="websiteUrl" name="websiteUrl" placeholder="Website">
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Your Message ..."></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End of Contact Form Holder -->
            </div>
        </div>
        <div class="section-content pt-0">
            <div class="title-wrap" data-aos="fade-up">
                <h2 class="section-title">Where To Find Us?</h2>
            </div>
            <div class="row text-center mt-4">
                <div class="col-md-3" data-aos="fade-up">
                    <span class="lnr lnr-location fs-40 py-4 d-block"></span>
                    <h5>LOCATION</h5>
                    <p>Tunis,Rades</p>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <span class="lnr lnr-clock fs-40 py-4 d-block"></span>
                    <h5>WORKING TIME</h5>
                    <p>Monday - Saturday</p>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <span class="lnr lnr-phone fs-40 py-4 d-block"></span>
                    <h5>CALL US</h5>
                    <p>53495535</p>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="600">
                    <span class="lnr lnr-phone fs-40 py-4 d-block"></span>
                    <h5>EMAIL</h5>
                    <p>hanadibenidda1234@gmail.com</p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End of Contact Form Section -->		<!-- Features Section-->
<section id="cta" class="bg-fixed overlay" style="background-image: url(img/bg.jpg);">
    <div class="container">
        <div class="section-content" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="mb-2">Make a beautiful life for other</h2>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Features Section-->
<footer class="mastfoot my-3">
    <div class="inner container">
         <div class="row">
         	<div class="col-lg-4 col-md-12 d-flex align-items-center">

         	</div>
         	<div class="col-lg-4 col-md-12 d-flex align-items-center">
         		<p class="mx-auto text-center mb-0">&copy; 2022 3awen.</a>.</p>
         	</div>

            <div class="col-lg-4 col-md-12">
            	<nav class="nav nav-mastfoot justify-content-center">
	                <a class="nav-link" href="#">
	                	<i class="fab fa-facebook-f"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-twitter"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-instagram"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-linkedin"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-youtube"></i>
	                </a>
	            </nav>
            </div>

        </div>
    </div>
</footer>	</div>

</div>
	<!-- External JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="vendor/isotope/isotope.min.js"></script>
	<script src="vendor/lightcase/lightcase.js"></script>
	<script src="vendor/waypoints/waypoint.min.js"></script>
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

	<!-- Main JS -->
	<script src="js/app.min.js "></script>
	<script src="//localhost:35729/livereload.js"></script>
</body>
</html>
