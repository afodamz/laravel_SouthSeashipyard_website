<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SouthSea Shipyard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		      <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/img/logo/logo.png') }}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ url('assets/css/gijgo.css') }}">
            <link rel="stylesheet" href="{{ url('assets/css/slicknav.css') }}">
            <link rel="stylesheet" href="{{ url('assets/css/animate.min.css') }}">
            <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ url('assets/css/fontawesome-all.min.css') }}">
            <link rel="stylesheet" href="{{ url('assets/css/themify-icons.css') }}">
            <link rel="stylesheet" href="{{ url('assets/css/slick.css') }}">
            <link rel="stylesheet" href="{{ url('assets/css/nice-select.css') }}">
            <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
            <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">
            <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
   </head>

   <body>

    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container">
                       <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li> +44 (0) 843 886 8175</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul>
                                    <li>Mon - Fri: 8:00 - 19:00 / Closed on Weekends</li>
                                </ul>
                            </div>
                       </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                <a href="/"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3">

                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-flex d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/services">Services</a></li>
                                            <li><a href="/projects">Projects</a></li>
                                            <li><a href="/company">About</a></li>
                                            <li><a href="/career">career</a></li>
                                            <li><a href="/contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(assets/img/hero/h1_hero.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Career</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- ================ contact section start ================= -->
    
            <div class="container">
                <div class="row p-10">
                    <div class="col-12">
                        <h2 class="contact-title text-center">Start a career with us</h2>
                    </div>
                    <div class="col-lg-8">
                        @if(count($errors) > 0)
                            @foreach($errors->all() as $error )
                            <div class="alert alert-danger">
                                {{$error}}
                            </div>
                            @endforeach
                        @endif
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        {!! Form::open(['url' => 'career/submit', 'files' => true]) !!}
                                    <div class="col-12">
                                        <div class="form-group">
                                            {{ Form::label('name', 'Full Name') }}
                                            {{ Form::text('name', '', ['class'=>'form-control valid', 'placeholder'=>'Enter Full Name']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {{ Form::label('email', 'E-Mail Address') }}
                                            {{ Form::email('email', '', ['class'=>'form-control valid', 'placeholder'=>'example@gmail.com']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {{ Form::label('phone', 'Telephone') }}
                                            {{ Form::number('phone', '', ['class'=>'form-control valid', 'placeholder'=>'+2348022657463']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {{ Form::label('position', 'position') }}
                                            {{ Form::text('position','', ['class'=>'form-control valid', 'placeholder'=>'Manager']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {{ Form::label('message', 'Application Letter') }}
                                            {{ Form::textarea('message', '', ['class'=>'form-control valid', 'placeholder'=>'I am applying for the position because....']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {{ Form::label('file', 'file must be in docx/pdf/doc format') }}
                                            <!-- {{ Form::file('file') }} -->
                                            {{ Form::file('file', ['class'=>'form-control valid', 'placeholder'=>'file must not be more than 5MB']) }}
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <div class="form-group">
                                            {{ Form::submit('submit', ['class'=>'btn btn-primary']) }}
                                        </div>
                                    </div>
                        {!! Form::close() !!}
                        
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    
    <footer>
       <!-- Footer Start-->
       <div class="footer-area footer-bg footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-50">
                         <!-- logo -->
                         <div class="footer-logo">
                           <a href="/"><img src="assets/img/logo/logo.png" alt=""></a>
                         </div>
                      </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Contact Info</h4>
                               <ul>
                                   <li>
                                   <p> Address :71-75 Shelton Street
                                    Covent Garden
                                    London
                                    W2H 9JQ
                                    United Kingdom
                                    </p>
                                   </li>
                                   <li><a href="#">Telephone:  +44 (0) 843 886 8175</a></li>
                                   <li><a href="#">Email :  matthew@southseashipyard.com</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <ul>
                                   <li><a href="/projects"> View Projects</a></li>
                                   <li><a href="/contact">Contact Us</a></li>
                                   <li><a href="/company">About</a></li>
                                   <li><a href="/services">Services</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Newsletter</h4>
                               <div class="footer-pera footer-pera2">
                                <p>Subscribe to our newsletter</p>
                            </div>
                            <!-- Form -->
                            <div class="footer-form" >
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="{{ url ('contact/submit') }}"
                                    method="get" class="subscribe_form relative mail_part">
                                        <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                        class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = ' Email Address '">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                            class="email_icon newsletter-submit button-contactForm"><img src="assets/img/icon/form_icon.png" alt=""></button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       
   </footer>

	<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ url('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>

		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ url('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ url('assets/js/popper.min.js') }}"></script>
        <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ url('ssets/js/jquery.slicknav.min.js') }}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ url('assets/js/slick.min.js') }}"></script>
        <!-- Date Picker -->
        <script src="{{ url('assets/js/gijgo.min.js') }}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ url('assets/js/wow.min.js') }}"></script>
		<script src="{{ url('./assets/js/animated.headline.js') }}"></script>
        <script src="{{ url('assets/js/jquery.magnific-popup.js') }}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ url('assets/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ url('assets/js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ url('assets/js/jquery.sticky.js') }}"></script>

        <!-- contact js -->
        <script src="{{ url('assets/js/contact.js') }}"></script>
        <script src="{{ url('assets/js/jquery.form.js') }}"></script>
        <script src="{{ url('assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ url('assets/js/mail-script.js') }}"></script>
        <script src="{{ url('assets/js/jquery.ajaxchimp.min.js') }}"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="{{ url('assets/js/plugins.js') }}"></script>
        <script src="{{ url('assets/js/main.js') }}"></script>

    </body>
</html>